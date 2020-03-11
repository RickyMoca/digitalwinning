<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_auth');
	}


	public function index()
	{
		$this->form_validation->set_rules(log_rules()); 

		if ($this->form_validation->run() == false) {
			$data['title'] = "Login Page";
			$data['card_titel'] = "Form Login";
			load_auth('v_login', $data);
		} else {
			$this->M_auth->signIn();
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$mesaage = 'You have been logged out!';
		success_message($mesaage);
		redirect('auth');
	}


	public function blocked()
	{
		$this->load->view('v_blocked');
	}


}
