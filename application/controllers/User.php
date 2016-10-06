<?php

class User extends CI_Controller
{
    public function unset_data()
    {
        $this->session->unset_userdata('uid');
        redirect('/');
    }

    public function insert_user()
    {
        $this->load->model('usermd');

        $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'address' => $this->input->post('address'),
            'contact' => $this->input->post('contact'),
            'civil_status' => $this->input->post('status'),
            'gender' => $this->input->post('gender'),
            'position' => $this->input->post('position'),
            'email_address' => $this->input->post('emailadd')
        );
        if ($this->input->post('uid') != ''){
            $this->usermd->update_data($data, $this->input->post('uid'));
            $this->api->set_session_message('success', 'You Have Successfully Updated User Information', 'message');

            redirect('/employee_list');

        }else{
            $id = $this->usermd->insert_data($data);
            $creds = array(
                'pid' => $id,
                'username' => $this->input->post('username'),
                'password' => MD5($this->input->post('password')),
                'position' => $this->input->post('position')
            );
            $this->usermd->insert_creds($creds);
            $this->api->set_session_message('success', 'You Have Successfully Created New User', 'message');

        }

        redirect('/add_employee');
    }

    public function get_data()
    {
        $this->load->model('usermd');
        $x = $this->usermd->get_data();
        ob_clean();
        echo json_encode($x);
        die();
    }
    public function delete($id)
    {
        $this->load->model('usermd');
        $this->usermd->delete($id);
        redirect('/employee_list');


    }
}