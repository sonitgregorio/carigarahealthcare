<?php

class Payroll extends CI_Controller
{
    public function payrolls()
    {
        $this->api->load_view('payroll/payroll', '', 'payrollmd', array('nav' => 'payroll'));

    }
}