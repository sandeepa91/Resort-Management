<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
        function __construct() {
        parent::__construct();
        $this->load->model('db_model', '', TRUE);
    }
	 
	public function index()
	{
		$fieldset =   array( 'email' ,'accesslevel' ,'userid' ,'username' ,'password','id'  ); 
                $data['userData'] = $this->db_model->getData($fieldset,'login');
		$this->load->view('Users/AddUsers',$data);
	}
        public function Add()
	{       $fieldset =   array( 'email' ,'accesslevel' ,'userid' ,'username' ,'password','id'  ); 
                $data['userData'] = $this->db_model->getData($fieldset,'login');
		$this->load->view('Users/AddUsers',$data);
	}
        public function Update()
	{       $fieldset =   array( 'email' ,'accesslevel' ,'userid' ,'username' ,'password','id'  ); 
                $data['userData'] = $this->db_model->getData($fieldset,'login');
		$this->load->view('Users/AddUsers',$data);
	}
          public function Test()
	{
		$this->load->view('Menubar/dist/HeaderMenu');
	}
        public function edit($id) 
        {
        $whereArr=array("id"=>$id);
        $result=$this->db_model->getData('email ,accesslevel,empid ,username ,password,id','login',$whereArr);
        $editdata['userData']=$result[0];
        $editdata["id"]=$id;
        $this->load->view("Users/UpdateUser",$editdata,$id);
        var_dump($id);
        }
        
        public function updatesystemuser()
	{   
            $AccessLevel = $this->input->post("AccessLevel", TRUE);
            $empid = $this->input->post("EmpId", TRUE);
            $email = $this->input->post("Email", TRUE);
            $Username = $this->input->post("Username", TRUE);
            $Password = $this->input->post("Password", TRUE);
            $CPassword =  $this->input->post("CPassword", TRUE) ;
            $ID=$this->input->post("hdnID",TRUE);
        
            $DataSet = array( 'email'=>$email,'accesslevel'=>$AccessLevel,'empid'=>$empid,'username'=>$Username, 
                   'password'=> $Password  ); 
            
            $whereArr = array("id"=>$ID);
            $result = $this->db_model->updateData( "login", $DataSet,$whereArr);
           
            redirect(base_url().'index.php/Users/index');
        }
        
        
        public function addsystemuser() {
        //var_dump(EmpCa);
        $AccessLevel = $this->input->post("AccessLevel", TRUE);
        $empid = $this->input->post("EmpId", TRUE);
        $email = $this->input->post("Email", TRUE);
        $Username = $this->input->post("Username", TRUE);
        $Password = $this->input->post("Password", TRUE);
        $CPassword =  $this->input->post("CPassword", TRUE) ; 
        
        if($Password == $CPassword){
            $DataSet = array( 'email'=>$email,'accesslevel'=>$AccessLevel,'userid'=>$empid,'username'=>$Username, 
                   'password'=>md5($Password) ); 
            $result = $this->db_model->insertData( "login", $DataSet);
            redirect(base_url().'index.php/Users/index'); 
        }  else {
            echo 'Password are not matching';
        }
        
         
        //var_dump($DataSet);
       
      
 }
        
}
 