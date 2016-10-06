<?php

/**
 *
 */
class Employee extends CI_Controller
{

    public function add_employee()
    {
        $this->api->load_view('employee/add_employee', '', 'usermd', array('nav' => 'employee'));
    }

    public function employee_list()
    {
        $this->api->load_view('employee/employee_list', '', 'usermd', array('nav' => 'employee_list'));
    }
}