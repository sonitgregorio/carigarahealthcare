<?php

class Medicinemd extends CI_Model
{

    public function get_medicine()
    {
        return $this->db->get('tbl_inventory')->result_array();
    }
    public function save_med($data)
    {
        $this->db->insert('tbl_inventory', $data);
    }
    public function checkMed($med)
    {
        $this->db->where('med_desc', $med);
            return $this->db->get('tbl_inventory')->num_rows();
    }
    public function get_med_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('tbl_inventory')->row_array();
    }
    public function save_prescribe($data)
    {
        $this->db->insert('tbl_prescription', $data);
        $this->db->where('id', $data['mid']);
        $x = $this->db->get('tbl_inventory')->row_array();


        $this->db->where('id', $data['mid']);
        $this->db->update('tbl_inventory', array('qty' => $x['qty'] - $data['qty']));
    }

    public function get_record_prescribe($cid)
    {
        $this->db->where('a.id = b.mid');
        $this->db->where('cid', $cid);
        $this->db->select('b.id, a.med_desc, a.price, b.qty, (a.price * b.qty) total, b.note');
        return $this->db->get('tbl_inventory a, tbl_prescription b')->result_array();
    }
    public function delete_pre($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_prescription');
    }

    public function add_stocks($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tbl_inventory', $data);
    }

    public function add_eq($data)
    {
        $this->db->insert('tbl_supply', $data);
    }
    public function get_userProfile($id)
    {
        $this->db->where('a.id', $id);
        $this->db->where('a.pid = b.id');
        $this->db->select('CONCAT (b.firstname, " ",b.lastname) fname');
        return $this->db->get('tbl_users a, tbl_party b')->row_array();
    }
    public function get_name($id)
    {
        $this->db->where('a.id', $id);
        $this->db->where('a.pid = b.id');
        $this->db->select('CONCAT (b.firstname, " ",b.lastname) fname');
        return $this->db->get('tbl_consultation a, tbl_party b')->row_array();
    }
    public function get_supp()
    {
        return $this->db->get('tbl_supply')->result_array();
    }




}