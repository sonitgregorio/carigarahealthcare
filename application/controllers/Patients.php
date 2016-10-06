<?php

class  Patients extends CI_Controller
{
    public function load_patient()
    {
        $this->api->load_view('patient/add_patient', '', 'patientsmd', array('nav' => 'patient'));
    }
    public function insert_patient()
    {
        $this->load->model('patientsmd');
        $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'address' => $this->input->post('address'),
            'contact' => $this->input->post('contact'),
            'civil_status' => $this->input->post('status'),
            'gender' => $this->input->post('gender'),
            'age' => $this->input->post('age'),
            'dob' => $this->input->post('dob'),
            'position' => '6'
        );
        $this->patientsmd->insert_patient($data);
        $this->api->set_session_message('success', 'Patient Successfully Added', 'message');
        redirect('/patient');
    }
    public function patient_list()
    {
        $this->api->load_view('patient/patient_list', '', 'patientsmd', array('nav' => 'patient_list'));

    }

}