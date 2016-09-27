<?php
    class Usermd extends CI_Model
    {
        public function insert_data($data)
        {
            $this->db->insert('tbl_party', $data);
            return $this->db->insert_id();
        }
        public function update_data($data, $where)
        {
            $this->db->where('id', $where);
            $this->db->update('tbl_party', $data);
        }
        public function insert_creds($data)
        {
            $this->db->insert('tbl_users', $data);
        }
        public function get_users()
        {
            $this->db->where('a.id = b.position');
            $this->db->select('a.id pos, b.id, a.description, firstname, lastname, address, contact, civil_status, gender, email_address');
            return $this->db->get('tbl_party b, tbl_position a')->result_array();
        }
        public function get_data()
        {
            $id = $this->input->post('data');
            $this->db->where('a.position = b.id');
            $this->db->where('a.id = c.pid');
            $this->db->where('a.id', $id);
            $this->db->select('c.username, c.password, b.id pos, a.id, b.description, firstname, lastname, address, contact, civil_status, gender, email_address');
            return $this->db->get('tbl_party a, tbl_position b, tbl_users c')->row_array();
        }
        public function delete($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('tbl_party');

            $this->db->where('pid', $id);
            $this->db->delet('tbl_users');
        }
    }