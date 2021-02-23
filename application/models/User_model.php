<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function select($id)
    {
        if ($id == null) {
            return $this->db->get("user");
        } else {
            return $this->db->get_where('user', ['id' => $id]);
        }
    }

    public function save($data)
    {
        $this->db->insert('user', $data);
        $data['id'] = $this->db->insert_id();
        $data['level'] = 'publisher';
        return $data;
    }

    public function update($data)
    {
        $item = [
            'username' => $data['username'],
            'nama_depan' => $data['nama_depan'],
            'nama_belakang' => $data['nama_belakang'],
        ];
        $this->db->update('user', $data, ['id' => $data['id']]);
        return $data;
    }
}

/* End of file User_model.php */
