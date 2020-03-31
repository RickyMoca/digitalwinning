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
		$data['data_absen'] = $this->M_home->dataabsen();
		load_template('v_index', $data);
	}

	/* ------------------------------------------------------------------------------
	*  # Controller Untuk absensi
	* ---------------------------------------------------------------------------- */


	public function absenyuk()
	{
		$this->M_home->absenklik();
		redirect('home');
	}
}
