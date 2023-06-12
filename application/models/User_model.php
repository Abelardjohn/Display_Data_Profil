<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function simpanUser($data)
    {
        $this->db->insert('user', $data);
    }


    public function getUserData($user_id)
    {
        $this->db->select('nama, email, foto_profil');
        $this->db->where('id', $user_id);
        $query = $this->db->get('user');
        return $query->row();
    }


    //Model untuk reset password
    public function reset_password($email, $new_password)
    {
        $this->db->where('email', $email);
        $this->db->update('user', array('user_password' => $new_password));
        return $this->db->affected_rows() > 0;
    }
}
