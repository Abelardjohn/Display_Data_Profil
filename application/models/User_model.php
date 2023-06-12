<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function simpanUser($data)
    {
        $this->db->insert('user', $data);
        // $this->db->insert('user', $data);
        // return $this->db->insert_id();
    }

    public function getUserData()
    {
        $this->db->select('nama, email, user_password, foto_profil, date_created');
        $this->db->from('user');
        $query = $this->db->get();
        return $query->row_array(); // Mengembalikan hasil query
    }



    //untuk reset password
    public function reset_password($email, $new_password)
    {
        $this->db->where('email', $email);
        $this->db->update('user', array('user_password' => $new_password));
        return $this->db->affected_rows() > 0;
    }







    // public function simpanPathFotoProfil($fotoProfil)
    // {
    //     $data = array(
    //         'foto_profil' => $fotoProfil
    //     );

    //     $this->db->where('id', $id);
    //     $this->db->update('user', $data);
    // }


    // public function setResetToken($email, $token, $expire)
    // {
    //     $data = array(
    //         'reset_token' => $token,
    //         'reset_token_expire' => $expire
    //     );

    //     $this->db->where('email', $email);
    //     $this->db->update('user', $data);
    // }

    // public function isTokenValid($token)
    // {
    //     $this->db->where('reset_token', $token);
    //     $this->db->where('reset_token_expire >', date('Y-m-d H:i:s'));
    //     $query = $this->db->get('user');

    //     return ($query->num_rows() === 1);
    // }

    // public function updatePassword($token, $password)
    // {
    //     $data = array(
    //         'user_password' => $password,
    //         'reset_token' => null,
    //         'reset_token_expire' => null
    //     );

    //     $this->db->where('reset_token', $token);
    //     $this->db->update('user', $data);
    // }

    //
}
