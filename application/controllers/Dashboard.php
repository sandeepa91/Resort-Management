<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	 
	public function index()
	{
		$this->load->view('Dashboard/AddEmployee');
	}
        public function Add()
	{
		$this->load->view('Employee/AddEmployee');
	}
        
        public function Update()
	{
		$this->load->view('Employee/UpdateEmployee');
	}
        
}
 