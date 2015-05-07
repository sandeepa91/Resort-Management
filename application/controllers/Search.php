<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	 
	public function index()
	{
		$this->load->view('Search/Booking_Room');
	}
        public function Booking_ReceptionHall()
	{
		$this->load->view('Search/Booking_Receptionhall');
	}
        public function Booking_Room()
        {
		$this->load->view('Search/Booking_Room');
	}
        public function Check_In_Room()
	{
		$this->load->view('Search/Check_IN_Room');
	}
        public function Check_In_Receptionhall()
        {
            $this->load->view('Search/Check_In_Receptionhall');
        }
}
 