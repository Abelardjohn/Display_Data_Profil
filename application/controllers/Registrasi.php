<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->upload->initialize(array(
            'upload_path' => './uploads/',
            'allowed_types' => 'gif|jpg|png',
            'max_size' => '11000'
        ));
    }

    public function index()
    {
        // Tampilkan halaman registrasi
        $this->load->view('./Template/Header');
        $this->load->view('Auth/Regis');
        $this->load->view('./Template/Footer');
    }

    public function process()
    {
        // Validasi 
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('user_password', 'User_Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan halaman registrasi kembali dengan pesan error
            $this->load->view('./Template/Header');
            $this->load->view('Auth/Regis');
            $this->load->view('./Template/Footer');
        } else {

            if (!$this->upload->do_upload('foto_profil')) {

                // $url = base_url('/Registrasi/index');
                // echo $this->session->set_flashdata('error', '
                // <p>Maaf, Anda tidak berhasil mengupload foto. Coba Lagi YA</p>');
                // redirect($url);
                echo $this->upload->display_errors();
                var_dump(realpath('your path goes here'));
            } else {

                // $this->upload->initialize($config);

                $name = $this->input->post('nama');
                $email = $this->input->post('email');
                $date = date('Y-m-d');
                $foto_profil = $this->_uploadFotoProfil();
                // $foto_profil = $foto_profil['file_name'];
                $hashedPassword = $this->_hashPassword($this->input->post('user_password'));

                $data = array(
                    'nama' => $name,
                    'email' => $email,
                    'user_password' =>  $hashedPassword,
                    // 'foto_profil' =>  $foto_profil['file_name'],
                    'foto_profil' => $this->_uploadFotoProfil(),
                    'user_akses' => 1,
                    'user_status' => 1,
                    'date_created' => $date,
                );

                // Panggil model untuk menyimpan data pengguna ke database
                $this->load->model('User_model');
                $this->User_model->simpanUser($data);

                // Redirect ke halaman sukses
                $url = base_url('/Registrasi/index');
                echo $this->session->set_flashdata('msg', '
                <p>Selamat akun anda telah ditambahkan. Ayo Login</p>');
                redirect($url);
            }
        }
    }

    private function _uploadFotoProfil()
    {
        // Konfigurasi upload foto profil
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 10048;
        $config['max_width'] = 10024;
        $config['max_height'] = 10068;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto_profil')) {
            // Jika upload berhasil, return nama file yang diunggah
            $data = $this->upload->data();
            return $data['file_name'];
        } else {
            // Jika upload gagal, tampilkan pesan error
            $error = $this->upload->display_errors();
            $this->form_validation->set_message('Gagal Upload', $error);
            return FALSE;
        }
    }

    //function untuk hash password ke MD5
    private function _hashPassword($password)
    {
        return md5($password);
    }
}
