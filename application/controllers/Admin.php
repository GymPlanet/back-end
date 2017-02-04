<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('bd_usuari');
    }
    
    public function logInView() {
        if (!$this->session->userdata('logged')) {
            $this->load->view('admin/login');
        }
        else {
            redirect('admin/menu');
        }
    }
    
    public function logInAction() {
        $mail = $this->input->post('mail');
        $password = $this->input->post('password');

        if ($this->bd_usuari->ifPassIsCorrectByMail($mail, md5($password))) {
            // Login
            
            $usuari_data = array (
                'mail' => $mail,
                'logged' => TRUE
            );
            
            $this->session->set_userdata($usuari_data);
            $this->bd_usuari->updateEsActiuUsuari($mail, 1);
            $this->bd_usuari->updateDateLastConnectionUsuari($mail);
            redirect('admin/menu');
        }
        else {
            // Error
            $this->session->set_flashdata('error', 1);
            redirect('admin');
        }
    }
    
    public function menuAdminView() {
        if ($this->session->userdata('logged')) {
            $this->load->view('admin/menu');
        }
        else {
            redirect('admin');
        }
    }
    
    public function logOutAction() {
        $mail = $this->session->userdata('mail');
        
        $newdata = array(
            'mail' => '',
            'logged' => FALSE
        );
        
        $this->session->unset_userdata($newdata);
        $this->session->sess_destroy();
        $this->bd_usuari->updateEsActiuUsuari($mail, 0);
        redirect('admin');
    }


}