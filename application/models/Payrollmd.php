<?php

class Payrollmd extends CI_Model {
    public function get_List()
    {
        $this->db->where('a.position != 6');
        $this->db->where('a.position = b.id');
        $this->db->select('a.*, b.description');
        return $this->db->get('tbl_party a, tbl_position b')->result_array();
    }
    public function getPayroll()
    {
    	return $this->db->get('tbl_payrol_period')->result_array();
    }
    public function insert_payslip($data)
    {
        $this->db->insert('tbl_payslip', $data);
    }
    public function get_payslip($pid, $ppid)
    {
        $this->db->where('pid', $pid);
        $this->db->where('ppid', $ppid);
        return $this->db->get('tbl_payslip')->row_array();
    }
    public function get_exist($pid, $ppid)
    {
        $this->db->where('pid', $pid);
        $this->db->where('ppid', $ppid);
        return $this->db->get('tbl_payslip')->num_rows();
    }
    public function update_payslip($data, $pid, $ppid)
    {
        $this->db->where('pid', $pid);
        $this->db->where('ppid', $ppid);
        $this->db->update('tbl_payslip', $data);
    }
    public function getPaysliprecord($id)
    {   
        $this->db->where('pid', $id);
        $this->db->where('tbl_payrol_period.id = tbl_payslip.ppid');
        $this->db->select('tbl_payrol_period.*');
        return $this->db->get('tbl_payrol_period, tbl_payslip')->result_array();
    }
}