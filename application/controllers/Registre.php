<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registre extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('bd_usuari');
        $this->load->model('bd_preference');
    }

    public function signUpView($type) {
        
        $data = "";
        if ($type == "trainer") {
            $data['sportsAvailable'] = $this->bd_preference->getAllSportsByIdioma(2);
            $data['sexPreference'] = $this->bd_preference->getSexPrefByIdioma(2);
            $data['timesAvailable'] = $this->bd_preference->getAllPrefHoraria();
            $data['daysAvailable'] = $this->bd_preference->getAllPrefDies(2);
        }
        
        $this->load->view("/users_form/".$type."_registration", $data);
    }
    
    public function registerUserAction() {
        $this->form_validation->set_rules('name', 'Nombre', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Mail', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[10]');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required|xss_clean');
        
        $this->form_validation->set_message('required', "Tienes que rellenar el campo %s.");
        $this->form_validation->set_message('valid_email', "Comprueba que l'email sea correcto.");
        $this->form_validation->set_message('min_length', "La contraseña debe tener 6 carácteres como mínimo.");
        $this->form_validation->set_message('max_length', "La contraseña debe tener 10 carácteres como máximo.");
        
        if ($this->form_validation->run() == FALSE) {
            // ERROR
            $this->load->view("/users_form/user_registration");
        }
        else {
            // OK
            
            $mail = $this->input->post('email');
            $password = $this->input->post('password');
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            
            $userByMail = $this->bd_usuari->ifPassIsCorrectByMail($mail, md5($password));
            
            if ($userByMail == false) {
                
                $usuariWeb = array(
                    'id_tipus_usuari' => 2,
                    'nom' => $name,
                    'email' => $mail,
                    'password' => md5($password),
                    'data_creacio' => date("Y-m-d H:i:s"),
                    'telefon' => $phone
                );
                
                $userWebId = $this->bd_usuari->insertUsuariWeb($usuariWeb);
                
                if ($userWebId > 0) {
                    $this->session->set_flashdata('resultUser', 1); // success
                }

                // Aqui es faria el login de l'usuari registrat o bé se li enviaria un mail de activacio de la compta on
                // haura de posar l'usuari i contrasenya per fer el login
            }
            
            redirect('sign-up-user');
            
        }
    }
    
    public function registerTrainerAction() {
        
        $this->form_validation->set_rules('name', 'Nombre', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Mail', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[10]');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required|xss_clean');
        $this->form_validation->set_rules('nationalIdNumber', 'DNI', 'trim|required|xss_clean');
        $this->form_validation->set_rules('languages', 'Lenguajes', 'trim|required|xss_clean');
        $this->form_validation->set_rules('sports[]', 'Deportes', 'trim|required|xss_clean');
        $this->form_validation->set_rules('week[]', 'Días de la semana', 'trim|required|xss_clean');
        $this->form_validation->set_rules('timetable', 'Horario', 'trim|required|xss_clean');
        $this->form_validation->set_rules('gender', 'Sexo', 'trim|required|xss_clean');
        
        $this->form_validation->set_message('required', "Tienes que rellenar el campo %s.");
        $this->form_validation->set_message('valid_email', "Comprueba que l'email sea correcto.");
        $this->form_validation->set_message('min_length', "La contraseña debe tener 6 carácteres como mínimo.");
        $this->form_validation->set_message('max_length', "La contraseña debe tener 10 carácteres como máximo.");
        
        if ($this->form_validation->run() == FALSE) {
            // ERROR
            $data['sportsAvailable'] = $this->bd_preference->getAllSportsByIdioma(2);
            $data['sexPreference'] = $this->bd_preference->getSexPrefByIdioma(2);
            $data['timesAvailable'] = $this->bd_preference->getAllPrefHoraria();
            $data['daysAvailable'] = $this->bd_preference->getAllPrefDies(2);
            $this->load->view("/users_form/trainer_registration", $data);
        }
        else {
            // OK
           
                $registerTrainer = array();
                
                /* GET INPUTS [Required] */

                $registerTrainer['nom'] = $this->input->post('name');
                $registerTrainer['mail'] = $this->input->post('email');
                $registerTrainer['password'] = $this->input->post('password');
                $registerTrainer['phone'] = $this->input->post('phone');
                $registerTrainer['dni'] = $this->input->post('nationalIdNumber');
                $registerTrainer['languages'] = $this->input->post('languages');
                $registerTrainer['sports'] = $this->input->post('sports');
                $registerTrainer['week'] = $this->input->post('week');
                $registerTrainer['timetable'] = $this->input->post('timetable');
                $registerTrainer['gender'] = $this->input->post('gender');

                /* GET INPUTS [Optional] */

                $registerTrainer['address'] = $this->input->post('ship-address');
                $registerTrainer['city'] = $this->input->post('ship-city');
                $registerTrainer['state'] = $this->input->post('ship-state');
                $registerTrainer['zip'] = $this->input->post('ship-zip');
                $registerTrainer['country'] = $this->input->post('ship-country');
                $registerTrainer['expov'] = $this->input->post('experienceOnVideo');
                
                /* PARSE mail per saber si es de Gmail */
                
                $structureMail = explode("@", $registerTrainer['mail']);
                
                // 1. Es fa l'insert a usuari_web i usuari
                $webUserData = array(
                    'id_tipus_usuari' => 3,
                    'nom' => $registerTrainer['nom'],
                    'email' => $registerTrainer['mail'],
                    'password' => md5($registerTrainer['password']),
                    'data_creacio' => date("Y-m-d H:i:s"),
                    'telefon' => $registerTrainer['phone'],
                    'es_validat' => 0
                );
                $userWebId = $this->bd_usuari->insertUsuariWeb($webUserData);
                
                $userData = array(
                    'id_usuari_web' => $userWebId,
                    'id_pref_horaria' => $registerTrainer['timetable'],
                    'id_pref_usuari' => $registerTrainer['gender'],
                    'nom' => $registerTrainer['nom'],
                    'email' => $registerTrainer['mail'],
                    'dni' => $registerTrainer['dni'],
                    'carrer' => $registerTrainer['address'],
                    'ciutat' => $registerTrainer['city'],
                    'estat' => $registerTrainer['state'],
                    'codi_postal' => $registerTrainer['zip'],
                    'pais' => $registerTrainer['country'],
                    'lleng_parla' => $registerTrainer['languages'],
                    'info_extra' => $registerTrainer['expov']
                );
                $userId = $this->bd_usuari->insertUsuari($userData);
                
                // update de email_gmail si $mailIsGmail es true
                if ($structureMail[1] == "gmail.com") {
                    $this->bd_usuari->updateEmailGmailUsuari($registerTrainer['mail'], $userId);
                }
                
                foreach ($registerTrainer['sports'] as $sport) {
                    $userPrefEsportivaData = array(
                        'id_usuari' => $userId,
                        'id_pref_esportiva' => $sport
                    );
                    $this->bd_usuari->insertUsuariPrefEsportiva($userPrefEsportivaData); // usuari_pref_esportiva
                }
                
                foreach ($registerTrainer['week'] as $day) {
                    $userPrefSetmanaData = array(
                        'id_usuari' => $userId,
                        'id_pref_setmana' => $day
                    );
                    $this->bd_usuari->insertUsuariPrefSetmana($userPrefSetmanaData); // insert usuari_pref_setmana
                }
                    
                // 2. Es guarden els arxius que s'han pujat
                
                if (isset($_FILES)) {
                    
                    mkdir("./files/trainers/".$registerTrainer['dni']."/", 0777, true);
                    
                    $config['upload_path'] = "./files/trainers/".$registerTrainer['dni']."/";
                    $config['allowed_types'] = 'pdf|jpg|png|jpeg';
                    
                    $this->load->library('upload', $config);
                    
                    $files = array();
                    foreach ($_FILES as $name => $file) {
                        $fileName = $name."_".$registerTrainer['dni'];
                        $files[] = $fileName;
                        $config['file_name'] = $fileName;

                        $this->upload->initialize($config);
                        if ($this->upload->do_upload($name)) {
                            $data['result'] = $this->upload->data();
                        }
                        else {
                            $data['result'] = $this->upload->display_errors();
                        }
                    }
                }
                
                if ($userId > 0 && $userWebId > 0 && $fileUploaded) {
                    $this->session->set_flashdata('resultTrainer', 1); // success
                }
                else {
                    $this->session->set_flashdata('resultTrainer', 0); // error
                }
                
                // Es guarden les dades a les diferents taules de la bd. Si el trainer es validat pel director, aquest rep un correu on se li indica que es acceptat i on
                // ja pot entrar al seu panell.
                
                redirect('sign-up-trainer');
        }
    }

}