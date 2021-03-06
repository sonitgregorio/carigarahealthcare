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
            'height' => $this->input->post('height'),
            'weight' => $this->input->post('weight'),
            'pressure' => $this->input->post('pressure'),
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
    public function consultation_done($id){
        $this->db->where('id', $id);
        $this->db->update('tbl_consultation', array('stats' => 1));
        $this->db->where('cid', $id);
        $this->db->delete('tbl_queue');
        $this->api->set_session_message('success', 'Consultation Done.', 'message');
        redirect('/consultation');
    }
    public function prescription($id)
    {
        $this->api->load_view('consultation/prescription', array('cid' => $id), array('patientsmd', 'medicinemd'), array('nav' => 'consult'));
    }
    public function prints($id)
    {
        $this->load->model('patientsmd');
        $this->load->model('medicinemd');
        $this->load->view('consultation/print', array('cid' => $id));
    }
}