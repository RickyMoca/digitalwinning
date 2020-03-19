<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cs extends MY_Controller
{

	public function __construct()
	{

		parent::__construct();
		// blocked();
		$this->load->model('M_cs');
	}

	public function index()
	{
		$data = [
			'title' => 'Followup',
			'page_name' => 'Followup',
			'getrole' => $this->M_cs->get_role(),
			'autotext' => $this->M_cs->get_autotext()
		];
		load_template('v_followup', $data);
		destroy_flashdata();
	}

	public function detail()
	{
		$data = [
			'title' => 'Campaign',
			'page_name' => 'Campaign',
			'id' => $this->M_cs->get_autonumber(),
			'getrole' => $this->M_cs->get_role(),
			'getuser' => $this->M_cs->get_user()
		];
		load_template('v_followup_detail', $data);
	}

	public function deletuser()
	{
		$id = $this->input->get('id');
		$this->M_cs->delet_user($id);
		$mesaage = 'Data Id ' . $id . ' has been deleted';
		success_message($mesaage);
		redirect('campaign');
	}



	public function registration()
	{
		// rules ambil dari helper
		$this->form_validation->set_rules(reg_rules());

		if ($this->form_validation->run() == false) {
			$mesaage = 'Data can\'t not saved,Try again.';
			danger_message($mesaage);
			$this->index(); // untuk memanggil fungction yang ada dlm satu controller

		} else {
			$email = $this->input->post('email', true);

			// kondisi status cekbox
			if ($this->input->post('status') != NULL) {
				$status = '1';
			} else {
				$status = '2';
			}

			$data = [
				'id' => $this->M_cs->Get_autonumber(),
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($email),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => $this->input->post('hakakses', true),
				'is_active' => $status,
				'date_created' => time()
			];

			$this->db->insert('user', $data);
			$mesaage = 'Congratulation! account has been created.';
			success_message($mesaage);
			redirect('admin');
		}
	}
}
