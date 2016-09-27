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
    }
    public function get_record_prescribe($cid)
    {
        $this->db->where('a.id = b.mid');
        $this->db->where('cid', $cid);
        $this->db->select('b.id, a.med_desc, a.price, b.qty, (a.price * b.qty) total');
        return $this->db->get('tbl_inventory a, tbl_prescription b')->result_array();
    }
    public function delete_pre($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_prescription');
    }

}