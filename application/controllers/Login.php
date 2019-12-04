<?php

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index() {

        $data['users'] = $this->Login_model->authenticateUser('kevin_walker','123456789');

        // Set title
        $data['title'] = 'Employee Login';

        // Load template header
        $this->load->view('templates/header', $data);

        // Load order page
        $this->load->view('login/login', $data);

        // Load template footer
        $this->load->view('templates/footer');
    }
}