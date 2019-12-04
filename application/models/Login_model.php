<?php
class Login_model extends CI_Model {

    public function authenticateUser($username, $password) {
        $this->db->select('id','username','name');
        $this->db->where('username',$username);
        $this->db->where('password',$password);

        $query = $this->db->get('users.users');

        if($query->num_rows() == 1) {
            echo "user is verified!";
            return $query->result();
        } else {
            return false;
        }

    }
}