<?php
class Orders_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_orders($id = FALSE) {
        if($id == FALSE) {
            $query = $this->db->get('items');
            return $query->result_array();
        }

    }
}