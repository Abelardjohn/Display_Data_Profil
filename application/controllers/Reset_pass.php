<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reset_pass extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->library('email');
        $this->load->model('User_model');
    }


    public function forgotPassword()
    {
        // Tampilkan form lupa password
        $this->load->view('./Template/Header');
        $this->load->view('./Auth/Ubah_pass');
        $this->load->view('./Template/Footer');
    }

    // public function sendResetLink()
    // {
    //     $email = $this->input->post('email');

    //     // Generate token dan set waktu kadaluarsa
    //     $token = bin2hex(random_bytes(32));
    //     $expire = date('Y-m-d H:i:s', strtotime('+1 hour'));

    //     // Simpan token dan waktu kadaluarsa ke database
    //     $this->User_model->setResetToken($email, $token, $expire);

    //     // Kirim email dengan tautan reset password
    //     $link = base_url('reset_password/reset/' . $token);
    //     $message = "Silakan klik tautan berikut untuk mereset password Anda: $link";


    //     $this->email->from('s11910098@student.unklab.ac.id', 'Abelard');
    //     $this->email->to($email);
    //     $this->email->subject('Reset Password');
    //     $this->email->message('Silakan klik tautan berikut untuk mereset password Anda: ' . base_url('Reset_pass/resetPassword/') . $token);
    //     $this->email->send();

    //     // Tampilkan pesan sukses
    //     // echo "Email dengan tautan reset password telah dikirim.";
    //     $url = base_url('/Reset_pass/forgotPassword');
    //     echo $this->session->set_flashdata('msg', '
    //     <p>Email dengan tautan reset password telah dikirim..</p>');
    //     redirect($url);
    // }

    // public function resetPassword($token)
    // {
    //     // Periksa apakah token valid dan belum kadaluarsa
    //     $valid = $this->User_model->isTokenValid($token);

    //     if ($valid) {
    //         // Tampilkan form reset password dengan menyertakan token
    //         $data['token'] = $token;
    //         $this->load->view('./Template/Header');
    //         $this->load->view('./Auth/New_pass');
    //         $this->load->view('./Template/Footer');
    //     } else {
    //         // Tampilkan pesan token tidak valid
    //         echo "Token reset password tidak valid atau telah kadaluarsa.";
    //     }
    // }

    // public function updatePassword()
    // {
    //     $token = $this->input->post('token');
    //     $password = $this->input->post('password');

    //     // Periksa apakah token valid dan belum kadaluarsa
    //     $valid = $this->User_model->isTokenValid($token);

    //     if ($valid) {
    //         // Hash password menggunakan MD5
    //         $hashed_password = md5($password);

    //         // Perbarui password pengguna
    //         $this->User_model->updatePassword($token, $hashed_password);

    //         // Tampilkan pesan sukses
    //         echo "Password telah diperbarui.";
    //     } else {
    //         // Tampilkan pesan token tidak valid
    //         echo "Token reset password tidak valid atau telah kadaluarsa.";
    //     }
    // }

    // public function process_reset()
    // {
    //     $this->load->library('form_validation');
    //     $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    //     $this->form_validation->set_rules('new_password', 'New Password', 'required|min_length[6]');
    //     $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[new_password]');

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view('./Template/Header');
    //         $this->load->view('./Auth/Ubah_pass');
    //         $this->load->view('./Template/Footer');

    //         $url = base_url('/Reset_pass/forgotPassword');
    //         echo $this->session->set_flashdata('msg', '
    //         <p>Password Tidak Berhasil di Reset!!</p>');
    //         redirect($url);
    //         // echo $this->upload->display_errors();
    //     } else {
    //         $email = $this->input->post('email');
    //         $new_password = md5($this->input->post('user_password'));

    //         $this->load->model('User_model');
    //         if ($this->User_model->reset_password($email, $new_password)) {
    //             $url = base_url('/Reset_pass/forgotPassword');
    //             echo $this->session->set_flashdata('msg', '
    //             <p>Password Berhasil di Reset!!</p>');
    //             redirect($url);
    //         } else {
    //             $url = base_url('/Reset_pass/forgotPassword');
    //             echo $this->session->set_flashdata('error', '
    //             <p>Password Tidak Berhasil di Reset!!</p>');
    //             redirect($url);
    //         }
    //     }
    // }
    public function process_reset()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('new_password', 'New Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[new_password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('./Template/Header');
            $this->load->view('./Auth/Ubah_pass');
            $this->load->view('./Template/Footer');

            $url = base_url('/Reset_pass/forgotPassword');
            echo $this->session->set_flashdata('msg', '
            <p>Password Tidak Berhasil di Reset!!</p>');
            redirect($url);
            // echo $this->upload->display_errors();
        } else {
            $email = $this->input->post('email');
            $new_password = md5($this->input->post('new_password'));

            $this->load->model('User_model');
            if ($this->User_model->reset_password($email, $new_password)) {
                $url = base_url('/Reset_pass/forgotPassword');
                echo $this->session->set_flashdata('msg', '
                <p>Password Berhasil di Reset!!</p>');
                redirect($url);
            } else {
                $url = base_url('/Reset_pass/forgotPassword');
                echo $this->session->set_flashdata('error', '
                <p>Password Tidak Berhasil di Reset!!</p>');
                redirect($url);
            }
        }
    }
}
