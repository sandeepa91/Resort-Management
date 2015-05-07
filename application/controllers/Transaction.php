<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaction extends CI_Controller {

	 
	public function index()
	{
		$this->load->view('Transaction/Booking');
	}
        public function Booking()
	{
		$this->load->view('Transaction/Booking');
	}
        public function Check_Out()
	{
		$this->load->view('Transaction/Check_Out');
	}
        public function Check_In()
	{
		$this->load->view('Transaction/Check_In');
	}
}
 