<?php
class Order_items_model extends CI_Model {

    public function create($order_id, $item_id) {
        $order_item = array(
            'order_id' => $order_id,
            'item_id' => $item_id
        );
        $this->db->insert('order_items',$order_item);
    }

    public function remove($id) {
        $this->db->where('id',$id);
        $this->db->delete('order_items');
    }
}