<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warehouse extends MY_Controller {

	public function __construct(){
		
		parent::__construct();
		blocked();

	}

	public function index()
	{
			$data['title']="Home";
			$data['page_name']= "Data Barang";
			load_template('v_index',$data);
		
	}
    
  
}