<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_home');
		blocked();
	}

	public function index()
	{
		$data['title'] = "Home";
		$data['page_name'] = "Home";
		load_template('v_index', $data);
	}

	/* ------------------------------------------------------------------------------
	*  # Controller Untuk Todolist
	* ---------------------------------------------------------------------------- */


	public function absenyuk()
	{
		$this->M_home->absenklik();
		$data['title'] = "Home";
		$data['page_name'] = "Home";
		load_template('v_index', $data);
	}




	/* ------------------------------------------------------------------------------
	*  # Controller Untuk ganti status
	* ---------------------------------------------------------------------------- */

	public function changestatus()
	{
		$id_todos = $this->input->post('ids');
		$this->M_home->changestatus($id_todos);
	}

	public function gantiStats()
	{
		$id_todos = $this->input->get('ids');
		$page = $this->input->get('page');
		$this->M_home->changestatus($id_todos);
		redirect('todo/detail?id=' . $id_todos . '&page=' . $page);
	}
}
