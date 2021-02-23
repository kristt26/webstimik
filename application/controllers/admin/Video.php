<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

    private $error;
    //variable for storing success message
    private $success;
 
    function __construct() {
        parent::__construct();
        //load this to validate the inputs in upload form
        $this->load->library('form_validation');
    }
 
    //appends all error messages
    private function handle_error($err) {
        $this->error .= $err . "rn";
    }
 
    //appends all success messages
    private function handle_success($succ) {
        $this->success .= $succ . "rn";
    }
 
    public function index() {
        if ($this->input->post('video_upload')) {
            //set preferences
            //file upload destination
            $upload_path = './assets/video/';
            $config['upload_path'] = $upload_path;
            //allowed file types. * means all types
            $config['allowed_types'] = 'wmv|mp4|avi|mov|mkv|flv';
            //allowed max file size. 0 means unlimited file size
            $config['max_size'] = '0';
            //max file name size
            $config['max_filename'] = '255';
            //whether file name should be encrypted or not
            $config['encrypt_name'] = FALSE;
            //store video info once uploaded
            $video_data = array();
            //check for errors
            $is_file_error = FALSE;
            //check if file was selected for upload
            if (!$_FILES) {
                $is_file_error = TRUE;
                $this->handle_error('Select a video file.');
            }
            //if file was selected then proceed to upload
            if (!$is_file_error) {
                //load the preferences
                $this->load->library('upload', $config);
                //check file successfully uploaded. 'video_name' is the name of the input
                if (!$this->upload->do_upload('video_name')) {
                    //if file upload failed then catch the errors
                    $this->handle_error($this->upload->display_errors());
                    $is_file_error = TRUE;
                } else {
                    //store the video file info
                    $video_data = $this->upload->data();
                }
            }
            // There were errors, we have to delete the uploaded video
            if ($is_file_error) {
                if ($video_data) {
                    $file = $upload_path . $video_data['file_name'];
                    if (file_exists($file)) {
                        unlink($file);
                    }
                }
            } else {
                $data['video_name'] = $video_data['file_name'];
                $data['video_path'] = $upload_path;
                $data['video_type'] = $video_data['file_type'];

                $this->handle_success('Video was successfully uploaded to direcoty <strong>' . $upload_path . '</strong>.');
                $data = array('video_name' => $video_data['file_name'] , 
                               'judul' => $this->input->post('judul'), 
                    );

                $this->load->model('admin/model_video');
                $this->model_video->getinsert($data);
            }

        }
        //load the error and success messages
        $data['errors'] = $this->error;
        $data['success'] = $this->success;
        $data['menu'] = 'admin/side_admin';
        $data['content'] = 'admin/view_video';
        $data['judul'] = 'master';
        $data['sub_judul'] = 'video';
        $data['data'] = $this->db->get('video');
        //load the view along with data
        $this->load->view('admin/home_view',$data);
     //   redirect('admin/video');
    }

    public function updateVideo($id)
    {
        $data_update = array(
         //  'id_pengumuman' => $this->input->post('id_pengumuman'),       
           
           'tampil' =>  $this->input->post('tampil'),
        );

        $this->db->where('id',$id);
        $this->db->update('video',$data_update);

        redirect('admin/video');            
         
    }

    public function delete_data($id)
    {
        $this->model_security->getsecurity();
        
        $where = array('id' => $id);
        $this->db->where('id',$id);
        $query = $this->db->get('video');
        $row = $query->row();
        unlink('./assets/video/'.$row->video_name);
        $this->load->model('admin/model_video');
        $del = $this->model_video->deleteData('video',$where);
        if($del >=1)
        {
            $this->session->set_flashdata('info','data berhasil dihapus');
        }
        redirect('admin/video');
    }
}
