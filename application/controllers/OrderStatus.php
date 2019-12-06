<?php

class OrderStatus extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Orders_model');
    }

    public function index() {
        $data['pending_orders'] = $this->Orders_model->get_pending();
        $data['completed_orders'] = $this->Orders_model->get_paid();

        //var_dump($data);
        //print_r($data);

        // Set title
        $data['title'] = 'View Pending Orders';

        // Load template header
        $this->load->view('templates/header', $data);

        // Load pending orders view
        $this->load->view('order_status/order_status', $data);

        // Load template footer
        $this->load->view('templates/footer');
    }
}