<?php

class OrderStatus extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Orders_model');
    }

    public function index() {
        $data['pending_orders'] = $this->Orders_model->get_pending();
        $data['completed_orders'] = $this->Orders_model->get_completed();
        $data['started_orders'] = $this->Orders_model->get_started();
        $data['paid_orders'] = $this->Orders_model->get_paid();

        // Set title
        $data['title'] = 'Order Status';

        // Load template header
        $this->load->view('templates/header', $data);

        // Load pending orders view
        $this->load->view('order_status/order_status', $data);

        // Load template footer
        $this->load->view('templates/footer');
    }

    public function updateOrderStatus() {
        $items = $this->input->post('items');
        $completed_items = $this->input->post('completeditems');
        $cancelled_items = $this->input->post('cancelleditems');

        if(isset($_POST['items'])) {
            foreach($items as $item_id) {
                $this->Orders_model->update($item_id,'started');
            }
            echo 'Order has been started';
        }

        if(isset($_POST['completeditems'])) {
            foreach($completed_items as $item_id) {
                $this->Orders_model->update($item_id,'completed');
            }
            echo 'Order has been completed';
        }

        if(isset($_POST['cancelleditems'])) {
            foreach($cancelled_items as $item_id) {
                $this->Orders_model->update($item_id,'cancelled');
            }
            echo 'Order has been cancelled';
        }


    }
}