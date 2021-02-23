<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Login extends CI_Controller
{

    public function index()
    {
        $this->load->view('admin/login_view');
    }

    public function getlogin()
    {
        $this->load->model('Model_user');
        $u = $this->input->post('username');
        $p = $this->input->post('password');
        $this->Model_user->select($u, $p);
    }
}
