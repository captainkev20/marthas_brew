<?php
class Orders_model extends CI_Model {

    public function get_order($id) {
        $this->db->where('id',$id);
        $query = $this->db->get('orders');
        return $query->row_array();
    }

    public function get_pending() {
        $this->db->where('status','pending');
        $query = $this->db->get('orders');
        return $query->result_array();
    }

    public function get_paid() {
        $this->db->where('status','paid');
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
}