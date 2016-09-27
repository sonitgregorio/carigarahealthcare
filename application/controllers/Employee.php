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
	}