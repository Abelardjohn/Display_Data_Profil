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

    //function untuk mereset password...
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
            <p>Password Not Reset Successfully!! (Minimum 6 Characters)</p>');
            redirect($url);
            // echo $this->upload->display_errors();
        } else {
            $email = $this->input->post('email');
            $new_password = md5($this->input->post('new_password'));

            $this->load->model('User_model');
            if ($this->User_model->reset_password($email, $new_password)) {
                $url = base_url('/Reset_pass/forgotPassword');
                echo $this->session->set_flashdata('msg', '
                <p>Password Reset Successfully!!</p>');
                redirect($url);
            } else {
                $url = base_url('/Reset_pass/forgotPassword');
                echo $this->session->set_flashdata('error', '
                <p>Password Not Reset Successfully!!</p>');
                redirect($url);
            }
        }
    }
}
