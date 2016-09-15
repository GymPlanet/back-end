<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registre extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('bd_usuari');
    }

    public function sign_up() {
        
        // Aprofitar per fer una única funció que carregui la vista del formulari d'usuari/professor
        $this->load->view('master/header');
        $this->load->view("/users_form/user_registration");
        $this->load->view('master/footer');
    }
    
    public function addUser() {
        $this->form_validation->set_rules('name', 'Nombre', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Mail', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[10]');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required|xss_clean');
        
        $this->form_validation->set_message('required', "Tienes que rellenar el campo %s.");
        $this->form_validation->set_message('valid_email', "Comprueba que l'email sea correcto.");
        $this->form_validation->set_message('min_length', "La contrasenya ha de tenir 6 caràcters com a mínim.");
        $this->form_validation->set_message('max_length', "La contrasenya ha de tenir 10 caràcters com a màxim.");
        
        if ($this->form_validation->run() == FALSE) {
            // ERROR
            
            $this->load->view('master/header');
            $this->load->view("/users_form/user_registration");
            $this->load->view('master/footer');
            
        }
        else {
            // OK
            
            $mail = $this->input->post('email');
            $password = $this->input->post('password');
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            
            $userByMail = $this->bd_usuari->ifPassIsCorrectByMail($mail, $password);
            
            if (!$userByMail) {
                
                $usuari = array(
                    'id_tipus_usuari' => 1,
                    'nom' => $name,
                    'email' => $mail,
                    'telefon' => $phone
                );
                
                $this->bd_usuari->insertUsuari($usuari);
                $usuari_created = $this->bd_usuari->getUsuariByMail($mail);
                
                $id_usuari = array(
                    'id_usuari' => $usuari_created->id
                );
                
                $this->bd_usuari->insertUsuariPrefSetmana($id_usuari);
           
                $usuariWeb = array(
                    'id_usuari' => $usuari_created->id,
                    'nom' => $name,
                    'email' => $mail,
                    'password' => md5($password),
                    'data_creacio' => date("Y-m-d H:i:s"),
                    'telefon' => $phone
                );
                
                $this->bd_usuari->insertUsuariWeb($usuariWeb);
                    
                $data["success"] = 1;

                $this->load->view('master/header');
                $this->load->view("/users_form/user_registration", $data);
                $this->load->view('master/footer');

                // Aqui es faria el login de l'usuari registrat o bé se li enviaria un mail de activacio de la compta on
                // haura de posar l'usuari i contrasenya per fer el login
                
            }
            else {
                
                $data["userIsCreated"] = 1;
                
                $this->load->view('master/header');
                $this->load->view("/users_form/user_registration", $data);
                $this->load->view('master/footer');
                
            }
            
        }
        
        
        
    }

}