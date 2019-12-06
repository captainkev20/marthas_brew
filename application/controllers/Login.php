<?php

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->helper('url');
        $this->load->library('form_validation');

    }

    public function index() {

        // Set title
        $data['title'] = 'Employee Login';

        // Load template header
        $this->load->view('templates/header', $data);

        // Load order page
        $this->load->view('login/login', $data);

        // Load template footer
        $this->load->view('templates/footer');
    }

    public function loginUser() {

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if($this->Login_model->authenticateUser($username,$password)) {
                redirect('http://localhost:8888/marthas_brew/orderstatus', 'refresh');
            } else {
                echo 'Sorry, your information is incorrect.';
            }
        }
    }
}