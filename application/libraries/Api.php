<?php
class Api
{
    protected $CI;

    function __construct()
    {
        $this->CI =& get_instance();
    }
    /*
     *  Load template by passing the parameters the
     *  $template string where the view is located
     *  $data if you are passing any type of data
     *  $model load if model is not empty
     *  $active for the menu to be highlighted
     */
    public function load_view($template, $data, $model, $active)
    {
        if ($model) {
            $this->CI->load->model($model);
        }
        $this->CI->load->view('templates/header');
        if ($this->CI->session->userdata('uid')) {
            $this->CI->load->view('templates/navigation', $active);
            $this->CI->load->view($template, $data);
        }else{
            $this->set_session_message('danger', 'Invalid Username/Password', 'message');
            redirect('/');   
        }
        $this->CI->load->view('templates/footer');
    }

    /*
     * This Function is to hold call back process.
     */
    public function set_session_message($type = 'success', $message, $name = 'message')
    {
        $this->CI->session->set_flashdata($name,'<div class="alert alert-'.$type.' hd">'.$message.'</div>');
    }
    public function get_position()
    {
        return $this->CI->db->get('tbl_position')->result();
    }
    public function get_branch()
    {
        return $this->CI->db->get('tbl_branch')->result();
    }
}