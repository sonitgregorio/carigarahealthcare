<?php

class Medicine extends CI_Controller
{

    public function load_inventory()
    {
        $this->api->load_view('inventory/medicine', '', 'medicinemd', array('nav' => 'inventory'));
    }

    public function save_med()
    {
        $this->load->model('medicinemd');
        $med = $this->input->post('med');
        $amount = $this->input->post('amount');
        $qty = $this->input->post('qty');
        $data = array(
            'med_desc' => $med,
            'price' => $amount,
            'qty' => $qty
        );
        $x = $this->medicinemd->checkMed($this->input->post('med'));
        ob_clean();
        if ($x > 0 ){
            echo "Medicine Name is already Exist Please Enter Different Medicine name or Update Existing Medicine";
        }else{
            $this->medicinemd->save_med($data);
            $this->api->set_session_message('success', 'You Have Successfully Added New Medicine', 'message');
        }
    }
    public function checkmed()
    {
        $this->load->model('medicinemd');
        $x = $this->medicinemd->checkMed($this->input->post('med'));
        ob_clean();
        if ($x > 0 ){
            echo "Medicine Name is already Exist Please Enter Different Medicine name or Update Existing Medicine";
        }
        die();
    }
    public function get_med_id()
    {
        $this->load->model('medicinemd');
        $result = $this->medicinemd->get_med_id($this->input->post('id'));
        ob_clean();
        echo json_encode($result);
        die();
    }
    public function save_prescribe()
    {
        $this->load->model('medicinemd');
        $mid = $this->input->post('medid');
        $note = $this->input->post('note');
        $preqty = $this->input->post('preqty');
        $cid = $this->input->post('cid');

        $data = array(
            'cid' => $cid,
            'mid' => $mid,
            'qty' => $preqty,
            'note' => $note
        );

        $this->medicinemd->save_prescribe($data);
        $this->api->set_session_message('success', 'You Have Successfully Added Prescription', 'message');
        redirect('/prescription/'.$cid);
    }
    public function delete_pre($id, $cid)
    {
        $this->load->model('medicinemd');
        $this->medicinemd->delete_pre($id);
        redirect('/prescription/'.$cid);
    }
    public function add_stock()
    {
        $this->load->model('medicinemd');
        $rem = $this->input->post('rem_qty');
        $add = $this->input->post('t_stocks');
        $id = $this->input->post('medid');
        echo $add;

        $this->medicinemd->add_stocks($id, array('qty' => $rem + $add));
        redirect('/inventory');
    }
    public function save_eq()
    {
        $this->load->model('medicinemd');
        $eqname = $this->input->post('eqname');
        $sup_amount = $this->input->post('sup_amount');
        $sup_qty = $this->input->post('sup_qty');

        $this->medicinemd->add_eq(array('equipment' => $eqname , 'quantity' => $sup_qty, 'amount' => $sup_amount ));
        redirect('/equipment');
    }
    public function load_equipment()
    {
        $this->api->load_view('equipment/equipments', '', 'medicinemd', array('nav' => 'equipment'));
    }
}