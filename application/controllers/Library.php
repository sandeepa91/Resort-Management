<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Library extends CI_Controller {

	 
	public function index()
	{
		$this->load->view('Library/Room_Information');
	}
        
	public function Room_Information()
	{
		$this->load->view('Library/Room_Information');
	}
        
	public function Client_Information()
	{
		$this->load->view('Library/Client_Information');
	}
}
 