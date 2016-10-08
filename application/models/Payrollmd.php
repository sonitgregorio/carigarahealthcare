<?php

class Payrollmd extends CI_Model {
    public function get_List(){
        $this->db->where('a.position != 6');
        $this->db->where('a.position = b.id');
        return $this->db->get('tbl_party a, tbl_position b')->result_array();

    }
}