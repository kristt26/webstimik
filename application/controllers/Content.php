<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Content extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Model_berita', 'BeritaModel');
        $this->load->model('admin/Model_galeri', 'BeritaGaleri');
        $this->load->library('Mylib');

    }

    public function index()
    {
        $set = $this->input->get();
        $content['recent'] = $this->BeritaModel->recent()->result_array();
        $content['galery'] = $this->BeritaGaleri->select()->result_array();
        switch ($set['set']) {
            case 'sambutan':
                $data['data'] = ['gambar' => base_url('assets/img/img1.jpg')];
                $content['content'] = $this->load->view('content/sambutan', $data, true);
                $content['judul'] = "Sambutan Ketua";
                $content['breadcrumb'] = 'Sambutan';
                $content['url'] = 'assets/img/img1.jpg';
                $this->load->view('template/content', $content);
                break;
            case 'sejarah':
                $this->load->model('admin/Model_tentang', 'ModelTentang');
                $data['data'] = $this->ModelTentang->getdata(['id' => 1])->row_array();
                $content['content'] = $this->load->view('content/sejarah', $data, true);
                $content['judul'] = 'Sejarah';
                $content['breadcrumb'] = 'Tentang';
                $content['url'] = 'assets/images/Tentang/' . $data['data']['gambar'];
                $this->load->view('template/content', $content);
                break;
            default:
                $data['data'] = $this->BeritaModel->getdata(['id' => $set['id']])->row_array();
                $content['content'] = $this->load->view('content/berita', $data, true);
                $content['judul'] = "Detail Berita";
                $content['breadcrumb'] = 'Berita';
                $content['url'] = 'assets/images/Berita/' . $data['data']['gambar'];
                $this->load->view('template/content', $content);
                break;
        }
    }
}

/* End of file Content.php */
