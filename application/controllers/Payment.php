<?php
class Payment extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Orders_model');
    }

    public function index() {

        // Set title
        $data['title'] = 'Payment';

        // Load template header
        $this->load->view('templates/header', $data);

        // Load order page
        $this->load->view('payments/payments', $data);

        // Load template footer
        $this->load->view('templates/footer');
    }

    public function processPayment() {

        $order_id = $_SESSION['order_id'];
        $order_paid_status = 'paid';

        $this->Orders_model->updatePaid($order_id,$order_paid_status);

        echo 'Payment Complete!';

        session_destroy();
    }
}