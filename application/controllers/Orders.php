<?php
class Orders extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('orders_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['orders'] = $this->orders_model->get_orders();
        $data['title'] = 'Order Food';

        $this->load->view('templates/header', $data);
        $this->load->view('orders/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id = NULL) {
        $data['order_item'] = $this->order_model->get_orders($id);

        if(empty($data['order_item'])) {
            show_404();
        }

        $data['title'] = $data['order_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('orders/index', $data);
        $this->load->view('templates/footer');
}
}