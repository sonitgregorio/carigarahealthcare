<?php

/**
 *
 */
class Mainmd extends CI_Model
{
    public function check_user($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->where('tbl_party.id = tbl_users.pid');
        $this->db->where('tbl_position.id = tbl_users.position');
        $this->db->select('tbl_users.*, tbl_party.firstname, tbl_party.firstname, tbl_position.description');
        return $this->db->get('tbl_users, tbl_party, tbl_position')->row_array();
    }

    public function messageForm($type = 'success', $message, $name = 'message')
    {
        $this->session->set_flashdata($name, '<div class="alert alert-' . $type . '">' . $message . '</div>');
    }
}

