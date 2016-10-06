<?php

class Patientsmd extends CI_Model
{
    public function insert_patient($data)
    {
        $this->db->insert('tbl_party', $data);
    }

    public function get_patient()
    {
        $this->db->where('position', '6');
        return $this->db->get('tbl_party')->result_array();
    }
    public function get_queue()
    {
        $this->db->where('a.cid = b.id AND b.pid = c.id');
        $this->db->select('c.*');

        return $this->db->get('tbl_queue a, tbl_consultation b, tbl_party c')->result_array();
    }
    public function get_records($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('tbl_party')->row_array();
    }

    public function insert_consultation($data)
    {
        $this->db->insert('tbl_consultation', $data);
        $this->db->insert('tbl_queue', array('cid' => $this->db->insert_id()));
    }

    public function get_consultation($pid)
    {
        $this->db->where('pid', $pid);
        return $this->db->get('tbl_consultation')->result_array();
    }

    public function get_conrecord($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('tbl_consultation')->row_array();
    }

    public function save_findings($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tbl_consultation', $data);
    }
}