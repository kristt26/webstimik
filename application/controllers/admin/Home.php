<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $result['title'] = "Beranda";
        $result['breadcrumb'] = "Beranda";
        $result['content'] = $this->load->view('home/index', '', true);
        $this->load->view('template/admin', $result);
    }
}

/* End of file Home.php */
