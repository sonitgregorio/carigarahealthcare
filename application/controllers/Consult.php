<?php

class Consult extends CI_Controller
{
    function view_consult()
    {
        $this->api->load_view('consultation/consult', '', 'patientsmd', array('nav' => 'consult'));
    }
    function view_records($id)
    {
        $this->api->load_view('consultation/patient_records', array('pid' => $id), 'patientsmd', array('nav' => 'consult'));
    }
    function insert_consultation()
    {
        $this->load->model('patientsmd');
        $pid = $this->input->post('pid');
        $data = array(
            'pid' => $pid,
            'symptoms' => $this->input->post('symptoms'),
            'date' => Date('Y-m-d'),
        );
        $this->patientsmd->insert_consultation($data);
        $this->api->set_session_message('success', 'You can now proceed to the doctor.', 'message');
        redirect('view_records/'.$pid);
    }
    function get_conrecord()
    {
        $this->load->model('patientsmd');
        $id = $this->input->post('data');
        $result = $this->patientsmd->get_conrecord($id);
        ob_clean();
        echo json_encode($result);
        die();
    }
    function save_findings()
    {
        $this->load->model('patientsmd');
        $data = array(
            'symptoms' => $this->input->post('symptomss'),
            'findings' => $this->input->post('findings'),
        );
        $this->patientsmd->save_findings($data, $this->input->post('cid'));
        redirect('view_records/'.$this->input->post('pid'));
    }
    public function prescription($id)
    {
        $this->api->load_view('consultation/prescription', array('cid' => $id), array('patientsmd', 'medicinemd'), array('nav' => 'consult'));
    }
}