<?php
class Items_model extends CI_Model {

    public function get($beverage_category) {
        $this->db->where('beverage_category',$beverage_category);
        $query = $this->db->get('items');
        return $query->result_array();

    }

    public function getCost($item_id)
    {
        $this->db->where("id", $item_id);
        return $this->db->get("items")->row("cost");
    }
}