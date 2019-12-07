<?php

class About extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        // Set title
        $data['title'] = 'About Us';

        // Load template header
        $this->load->view('templates/header', $data);

        // Load about us page
        $this->load->view('pages/about_us', $data);

        // Load template footer
        $this->load->view('templates/footer');
    }
}