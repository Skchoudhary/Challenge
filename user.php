<?php
class job_get extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function login($data) {

        $condition = "Email =" . "'" . $data['email'] . "' AND " . "Password =" . "'" . $data['password'] . "'";
        $this->db->select('*');
        $this->db->from('user_detail');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

            // Read data from database to show data in admin page
    public function read_user_information($username) {

        $condition = "Email =" . "'" . $username . "'";
        $this->db->select('*');
        $this->db->from('user_detail');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}