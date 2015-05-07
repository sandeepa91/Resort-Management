<?php   

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('db_model', '', TRUE);
    }

    public function index() {
        
        $this->load->view('Login/Login');
        
    }
    public function Dashbord() {
        $this->load->view('Login/Dashbord');
    }

    public function verifyUser() {

        $user = $this->input->post('txtName', TRUE);
        $psw = $this->input->post('txtPassword', TRUE);
        $fieldset = array('username');
        $whereArr = array("username" => $user, "password" => $psw);
        $result = $this->db_model->verification($fieldset, 'login', $whereArr);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url() . "index.php/login/");
    }
    
}
