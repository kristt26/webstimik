<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Berita extends CI_Controller
{

    public function index()
    {
        $this->model_security->getsecurity();
        $result['title'] = "Berita";
        $result['breadcrumb'] = "Berita";
        // $result['subtitle'] = "Testing";
        $data['data'] = $this->db->get('berita');
        $result['content'] = $this->load->view('admin/berita_view', $data, true);
        $this->load->view('template/admin', $result);
        // $this->model_security->getsecurity();
        // $result['content'] = 'admin/berita_view';
        // $result['judul'] = 'Berita';
        // $result['menu'] = 'admin/side_admin';
        // $result['data'] = $this->db->get('berita');
        // $this->load->view('admin/home_view',$result);
    }

    public function tambahData()
    {
        $this->model_security->getsecurity();
        $result['title'] = "Berita";
        $result['breadcrumb'] = "Berita";
        $result['subtitle'] = "Tambah Berita";
        $result['content'] = $this->load->view('admin/form_tambahBerita', '', true);
        $this->load->view('template/admin', $result);
        // $this->model_security->getsecurity();
        // $result['content'] = admin/form_tambahBerita';
        // $result['menu'] = 'admin/side_admin';
        // $result['judul'] = 'Tambah Berita';
        // $this->load->view('admin/home_view', $result);

    }

    public function simpanData()
    {
        $this->model_security->getsecurity();
        $this->load->library('upload');
        //config untuk upload gambar
        $nmfile = "file_" . time();
        $config['upload_path'] = './assets/images/Berita';
        $config['allowed_types'] = 'jpg|png|bmp|jpeg';
        $config['overwrite'] = false;
        $config['max_size'] = '10000';
        $config['file_name'] = $nmfile;
        $this->upload->initialize($config);

        array('upload_data' => $this->upload->data());
        $this->load->model('admin/model_berita');
        if ($_FILES['gambar']['name']) {
            if ($this->upload->do_upload('gambar')) {
                $gbr = $this->upload->data();
                $data = array(

                    'judul' => $this->input->post('judul'),
                    'isi' => $this->input->post('isi'),
                    'gambar' => $gbr['file_name'],
                    'tanggal' => $this->input->post('tanggal'),
                    'publish' => $this->input->post('publish'),
                    'userid' => $this->session->userdata('id'),
                );
            }
        } else {
            $data = array(

                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                //    'gambar' =>$gbr['file_name'],
                'tanggal' => $this->input->post('tanggal'),
                'publish' => $this->input->post('publish'),
                'userid' => $this->session->userdata('id'),
            );
        }

        $this->model_berita->getinsert($data);
        $this->session->set_flashdata('info', 'data berhasil dresultmpan');
        redirect('admin/berita/tambahData');
    }

    public function delete($id)
    {
        $this->model_security->getsecurity();
        $where = array('id' => $id);

        $query = $this->db->get('berita');
        $row = $query->row();
        unlink('./assets/images/Berita/' . $row->gambar);
        $this->load->model('admin/model_berita');
        $del = $this->model_berita->deleteData('berita', $where);

        if ($del >= 1) {
            $this->session->set_flashdata('info', 'data berhasil dihapus');
        }

        redirect('admin/berita');
    }

    public function editData($id)
    {
        $this->model_security->getsecurity();
        $result['title'] = "Berita";
        $result['breadcrumb'] = "Berita";
        $result['subtitle'] = "Edit Berita";

        $where = array('id' => $id);
        $this->load->model('admin/model_berita');
        $query = $this->model_berita->getdata($where);
        $data = $query->row_array();
        $result['content'] = $this->load->view('admin/form_editBerita', $data, true);

        $this->load->view('template/admin', $result);
        // $this->model_security->getsecurity();
        // $result['content'] = 'admin/form_editBerita';
        // $result['menu'] = 'admin/side_admin';
        // $result['judul'] = 'Berita';
        // $result['sub_judul'] = 'edit Berita';

        // $where = array('id' => $id);
        // $this->load->model('admin/model_berita');
        // $query = $this->model_berita->getdata($where);

        // if ($query->num_rows() > 0) {
        //     foreach ($query->result() as $row) {
        //         $result['id'] = $row->id;
        //         $result['judul'] = $row->judul;
        //         $result['result'] = $row->result;
        //         $result['gambar'] = $row->gambar;
        //         $result['tanggal'] = $row->tanggal;

        //     }
        // }

        // $this->load->view('admin/home_view', $result);
    }

    public function updateData()
    {
        $this->model_security->getsecurity();
        $this->load->library('upload');
        //config untuk upload gambar
        $nmfile = "file_" . time();
        $config['upload_path'] = './assets/images/Berita/';
        $config['allowed_types'] = 'jpg|png|bmp|jpeg';
        $config['overwrite'] = false;
        $config['max_size'] = '10000';
        $config['file_name'] = $nmfile;
        $this->upload->initialize($config);

        array('upload_data' => $this->upload->data());

        if ($_FILES['gambar']['name']) {
            if ($this->upload->do_upload('gambar')) {
                $gbr = $this->upload->data();
                $data = array(

                    'judul' => $this->input->post('judul'),
                    'isi' => $this->input->post('isi'),
                    'gambar' => $gbr['file_name'],
                    'tanggal' => $this->input->post('tanggal'),
                    'publish' => $this->input->post('publish'),
                    'userid' => $this->session->userdata('id'),
                );
                $query = $this->db->get('berita');
                $row = $query->row();
                unlink('./assets/images/Berita/' . $row->gambar);

            }

        } else {
            $data = array(

                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'tanggal' => $this->input->post('tanggal'),
                'publish' => $this->input->post('publish'),
                'userid' => $this->session->userdata('id'),
            );
        }
        $where = array('id' => $this->input->post('kode'));
        $this->load->model('admin/model_berita');
        $upd = $this->model_berita->updatedata('berita', $data, $where);
        //$upd = $this->session->set_flashdata('info','data berhasil dresultmpan');

        if ($upd >= 1) {
            $this->session->set_flashdata('info', 'data berhasil diupdate');
        }

        redirect('admin/berita');

    }

}
