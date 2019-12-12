<?php
class Orders_model extends CI_Model {

    public function get_order($id) {
        $this->db->where('id',$id);
        $query = $this->db->get('orders');
        return $query->row_array();
    }

    public function get_pending() {
        $this->db->where('status','pending');
        $this->db->order_by('pickup_time','ASC');
        $query = $this->db->get('orders');
        return $query->result_array();
    }

    public function get_started() {
        $this->db->where('status','started');
        $query = $this->db->get('orders');
        return $query->result_array();
    }

    public function get_completed() {
        $this->db->where('status','completed');
        $query = $this->db->get('orders');
        return $query->result_array();
    }

    public function get_paid() {
        $this->db->where('paid_status','paid');
        $query = $this->db->get('orders');
        return $query->result_array();
    }

    public function create($customer_name, $phone_number, $cost) {
        $order = array(
            'customer_name' => $customer_name,
            'phone_number' => $phone_number,
            'status' => 'pending',
            'cost' => $cost
        );

        $this->db->insert('orders',$order);

        return $this->db->insert_id();
    }

    public function update($id, $status) {
        $order = array(
            'status' => $status
        );

        $this->db->where('id',$id);
        $this->db->update('orders',$order);
    }

    public function updatePaid($id, $paid) {
        $order = array(
            'paid_status' => $paid
        );

        $this->db->where('id',$id);
        $this->db->update('orders',$order);
    }

}