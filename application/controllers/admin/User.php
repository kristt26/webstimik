<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    {
        $result['title'] = "User";
        $result['breadcrumb'] = "User";
        $result['content'] = $this->load->view('user/index', '', true);
        $this->load->view('template/admin', $result);

    }

    public function getdata()
    {
        echo json_encode($this->User_model->select(null)->result());
    }

    public function post()
    {
        $data = json_decode($this->security->xss_clean($this->input->raw_input_stream), true);
        $result = $this->User_model->save($data);
        echo json_encode($result);
    }

    public function put()
    {
        $data = json_decode($this->security->xss_clean($this->input->raw_input_stream), true);
        $result = $this->User_model->update($data);
        echo json_encode($result);
    }

}

/* End of file User.php */
