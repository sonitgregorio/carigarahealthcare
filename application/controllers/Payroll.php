<?php

class Payroll extends CI_Controller
{
    public function payrolls()
    {
        $this->api->load_view('payroll/payroll', '', 'payrollmd', array('nav' => 'payroll'));

    }
    public function add_payslip($pid, $ppid)
    {
    	$this->api->load_view('payroll/add_payslip', array('pid' => $pid, 'ppid' => $ppid), 'payrollmd', array('nav' => 'payroll'));
    }
    public function payroll_period()
    {
    	$date_from = $this->input->post('date_from');
    	$date_to = $this->input->post('date_to');
    	$date_entry = Date('Y-m-d');

    	$data = array(
    		'date_from' => $date_from,
    		'date_to' => $date_to,
    		'date_entry' => $date_entry
    		);

    	$this->db->insert('tbl_payrol_period', $data);
    	$this->api->set_session_message('success', 'Payroll Period Added', 'message');
    	redirect('/payrolls');
    }
    public function payroll_view($ppid)
    {
    	$this->api->load_view('payroll/payroll_view', array('ppid' => $ppid), 'payrollmd', array('nav' => 'payroll'));
    }
    public function insert_payslip()
    {
        $this->load->model('payrollmd');
        $pid = $this->input->post('pid');
        $ppid = $this->input->post('ppid');
        $regular_pay = $this->input->post('regular_pay');
        $overtime_pay = $this->input->post('overtime_pay');
        $night_diff = $this->input->post('night_diff');
        $bonuses = $this->input->post('bonuses');
        $nontaxable_allowance = $this->input->post('nontaxable_allowance');
        $other_nontaxable_allowance = $this->input->post('other_nontaxable_allowance');
        $tardiness = $this->input->post('tardiness');
        $undertime = $this->input->post('undertime');
        $absences = $this->input->post('absences');
        $cash_advance = $this->input->post('cash_advance');
        $sss = $this->input->post('sss');
        $phic = $this->input->post('phic');
        $hdmf = $this->input->post('hdmf');
        $with_tax = $this->input->post('with_tax');
        $total_earnings = $this->input->post('total_earnings');
        $total_deduction = $this->input->post('total_deduction');

        $data = array(
            'pid' => $pid,
            'ppid' => $ppid,
            'regular_pay' => $regular_pay,
            'overtime' => $overtime_pay,
            'night_diff' => $night_diff,
            'bonuses' => $bonuses,
            'nontaxable_allowance' => $nontaxable_allowance,
            'other_nontaxable_benifits' => $other_nontaxable_allowance,
            'tardiness' => $tardiness,
            'undertime' => $undertime,
            'absences' => $absences,
            'cash_advance' => $cash_advance,
            'sss' => $sss,
            'phic' => $phic,
            'hdmf' => $hdmf,
            'with_tax' => $with_tax,
            'total_deduction' => $total_deduction,
            'total_earnings' => $total_earnings
            );

        $x = $this->payrollmd->get_exist($pid, $ppid);
        if($x <= 0)
        {
            $this->payrollmd->insert_payslip($data);
            $this->api->set_session_message('success', 'Successfully Saved!', 'message');
        }
        else
        {
            $this->payrollmd->update_payslip($data, $pid, $ppid);
            $this->api->set_session_message('success', 'Successfully Updated!', 'message');
        }
       
        redirect('/payroll_view/'. $ppid);

    }
    public function view_payslip()
    {
        $this->api->load_view('payroll/view_payslip', '', 'payrollmd', array('nav' => 'view_payslip'));
    }
    public function my_payslip($ppid)
    {
        $this->api->load_view('payroll/my_payslip', array('ppid' => $ppid), 'payrollmd', array('nav' => 'view_payslip'));
    }
}