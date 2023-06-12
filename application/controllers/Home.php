<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


	public function index()
	{
		$this->load->model('User_model');

		$user_id = $this->session->userdata('user_id');
		$data['user'] = $this->User_model->getUserData($user_id); // untuk get data user dari model

		$this->load->view('./Template/Header');
		$this->load->view('./Home', $data);
		$this->load->view('./Template/Footer');
	}

	//function untuk logout
	function logout()
	{
		$this->session->sess_destroy();
		$url = base_url('Login');
		redirect($url);
	}
}
