<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File extends CI_Controller {

	 
	public function index()
	{
		$this->load->view('File/Reception_Hall');
	}
        public function Reception_Hall()
	{
		$this->load->view('File/Reception_Hall');
	}
        public function Room()
	{
		$this->load->view('File/Room');
	}
}
 