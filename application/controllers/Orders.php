<?php
class Orders extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Items_model');
        $this->load->model('Orders_model');
        $this->load->model('Order_items_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['hot_items'] = $this->Items_model->get('HOT');
        $data['cold_items'] = $this->Items_model->get('COLD');

        // Set title
        $data['title'] = 'Order Coffee';

        // Load template header
        $this->load->view('templates/header', $data);

        // Load order page
        $this->load->view('orders/index', $data);

        // Load template footer
        $this->load->view('templates/footer');
    }

    public function submit() {

        $customer_name = $this->input->post('customer_name');
        $phone_number = $this->input->post('phone_number');
        $items = $this->input->post('items');

        $cost = 0;
        foreach($items as $item_id) {
            $cost = $cost + $this->Items_model->getCost($item_id);
        }

        $order_id = $this->Orders_model->create($customer_name,$phone_number,$cost);

        foreach($items as $item_id) {
            $this->Order_items_model->create($order_id, $item_id);
        }

        echo "Your order is complete!";
    }

    public function view($id = NULL) {
        //$data['order_item'] = $this->Orders_model->get_orders($id);

        if(empty($data['order_item'])) {
            show_404();
        }

        $data['title'] = $data['order_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('orders/index', $data);
        $this->load->view('templates/footer');
}
}