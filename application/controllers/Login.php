<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('Mlogin');
    }


    public function index()
    {
        $this->load->view('./Template/Header');
        $this->load->view('./Auth/Login');
        $this->load->view('./Template/Footer');
    }

    function autentikasi()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('pass');

        $validasi_email = $this->Mlogin->query_validasi_email($email);

        if ($validasi_email->num_rows() > 0) {

            $validate_ps = $this->Mlogin->query_validasi_password($email, $password);

            if ($validate_ps->num_rows() > 0) {

                $x = $validate_ps->row_array();

                if ($x['user_status'] == '1') {

                    //session untuk supaya tidak ada user yang boleh akses masuk lewat path...
                    $this->session->set_userdata('logged', TRUE);
                    $this->session->set_userdata('user', $email);
                    $id = $x['user_id'];

                    if ($x['user_akses'] == '1') { //untuk login sebagai admin
                        $name = $x['user_name'];
                        $this->session->set_userdata('access', 'Administrator', TRUE);
                        $this->session->set_userdata('id', $id);
                        $this->session->set_userdata('name', $name);
                        redirect('Home');
                    }


                    //pesan yang mo timbul pas kalo salah input
                } else {
                    $url = base_url('Login');
                    echo $this->session->set_flashdata('msg', '
                    <h3>Uupps!</h3>
                    <p>Akun kamu telah di blokir!!.</p>');
                    redirect($url);
                }
            } else {
                $url = base_url('Login');
                echo $this->session->set_flashdata('msg', '
                    <h3>Uupps!</h3>
                    <p>Password yang kamu masukan salah!!.</p>');
                redirect($url);
            }
        } else {
            $url = base_url('Login');
            echo $this->session->set_flashdata('msg', '
            <h3>Uupps!</h3>
            <p>Email yang kamu masukan salah!!.</p>');
            redirect($url);
        }
    }
}
