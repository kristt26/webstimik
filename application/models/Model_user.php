<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_user extends CI_Model
{
    public function select($u, $p)
    {
        $result = $this->db->get_where('user', ['username' => $u, 'password' => md5($p)]);
        if ($result->num_rows() > 0) {
            $user = $result->row_array();
            if ($user['level'] == "admin") {
                $user['islogin'] = true;
                $this->session->set_userdata($user);
                redirect('admin/home_admin');
            } else {
                $user['islogin'] = true;
                $this->session->set_userdata($user);
                redirect('admin/home_publisher');
            }
        }
    }
}

/* End of file Model_login.php */
