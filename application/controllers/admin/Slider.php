<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Slider extends CI_Controller
{

    public function index()
    {
        $this->model_security->getsecurity();
        $isi['content'] = 'admin/slider_view';
        $isi['judul'] = 'slider';
        $isi['menu'] = 'admin/side_admin';
        $isi['data'] = $this->db->get('slider');
        $this->load->view('admin/home_view', $isi);
    }

    public function tambahData()
    {
        $this->model_security->getsecurity();
        $isi['content'] = 'admin/form_tambahSlider';
        $isi['menu'] = 'admin/side_admin';
        $isi['judul'] = 'Tambah slider';
        $this->load->view('admin/home_view', $isi);

    }

    public function simpanData()
    {
        $this->model_security->getsecurity();
        $this->load->library('upload');
        //config untuk upload gambar
        $nmfile = "file_" . time();
        $config['upload_path'] = './assets/images/Slider';
        $config['allowed_types'] = 'jpg|png|bmp|jpeg';
        $config['overwrite'] = false;
        $config['max_size'] = '10000';
        $config['file_name'] = $nmfile;
        $this->upload->initialize($config);

        array('upload_data' => $this->upload->data());
        $this->load->model('admin/model_slider');
        if ($_FILES['gambar']['name']) {
            if ($this->upload->do_upload('gambar')) {
                $gbr = $this->upload->data();
                $data = array(

                    'judul' => $this->input->post('judul'),
                    'isi' => $this->input->post('isi'),
                    'gambar' => $gbr['file_name'],
                    'tampil' => $this->input->post('tampil'),
                );
            }
        } else {
            $data = array(

                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'tampil' => $this->input->post('tampil'),

            );
        }

        $this->model_slider->getinsert($data);
        $this->session->set_flashdata('info', 'data berhasil disimpan');
        redirect('admin/slider/tambahData');
    }

    public function delete($id)
    {
        $this->model_security->getsecurity();
        $where = array('id' => $id);

        $query = $this->db->get('slider');
        $row = $query->row();
        unlink('./assets/images/Slider/' . $row->gambar);
        $this->load->model('admin/model_slider');
        $del = $this->model_slider->deleteData('slider', $where);

        if ($del >= 1) {
            $this->session->set_flashdata('info', 'data berhasil dihapus');
        }

        redirect('admin/slider');
    }

    public function editData($id)
    {
        $this->model_security->getsecurity();
        $isi['content'] = 'admin/form_editSlider';
        $isi['menu'] = 'admin/side_admin';
        $isi['judul'] = 'Edit slider';
        $isi['sub_judul'] = 'edit slider';

        $where = array('id' => $id);
        $this->load->model('admin/model_slider');
        $query = $this->model_slider->getdata($where);

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $isi['id'] = $row->id;
                $isi['judul'] = $row->judul;
                $isi['isi'] = $row->isi;
                $isi['gambar'] = $row->gambar;
                $isi['tampil'] = $row->tampil;

            }
        }

        $this->load->view('admin/home_view', $isi);
    }

    public function updateData()
    {
        $this->model_security->getsecurity();
        $this->load->library('upload');
        //config untuk upload gambar
        $nmfile = "file_" . time();
        $config['upload_path'] = './assets/images/Slider/';
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
                    'tampil' => $this->input->post('tampil'),
                    // 'tanggal' => $this->input->post('tanggal'),
                );
                $query = $this->db->get('slider');
                $row = $query->row();
                unlink('./assets/images/Slider/' . $row->gambar);

            }

        } else {
            $data = array(

                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'tampil' => $this->input->post('tampil'),
                // 'tanggal' => $this->input->post('tanggal'),
            );
        }
        $where = array('id' => $this->input->post('id'));
        $this->load->model('admin/model_slider');
        $upd = $this->model_slider->updatedata('slider', $data, $where);
        //$upd = $this->session->set_flashdata('info','data berhasil disimpan');

        if ($upd >= 1) {
            $this->session->set_flashdata('info', 'data berhasil diupdate');
        }

        redirect('admin/slider');

    }

}
