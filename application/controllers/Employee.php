<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_Controller {
        
        public function __construct() 
        {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->model('db_model', '', TRUE);
        }
	 
         
	public function index()
	{   
            $fieldset = array('accountno','address','branch','dob','email','empcategory','userid' ,'fname','gender','hiredate','homephone','lname','mobile','nicno','photo');
            $data['userData'] = $this->db_model->getData($fieldset,'employee');
            $this->load->view('Employee/AddEmployee',$data );
        }
        
        public function Add()
	{   $fieldset = array('accountno','address','branch','dob','email','empcategory','userid','fname','gender','hiredate','homephone','lname','mobile','nicno','photo');
            $data['userData'] = $this->db_model->getData($fieldset,'employee');
            
            $this->load->view('Employee/AddEmployee',$data);
	}
        
        public function Update()
	{       $fieldset = array('accountno','address','branch','dob','email','empcategory','empid','fname','gender','hiredate','homephone','lname','mobile','nicno','photo');
                $data['userData'] = $this->db_model->getData($fieldset,'employee');
		$this->load->view('Employee/UpdateEmployee',$data);
	}
        
        public function edit($id) 
        {
        $whereArr=array("userid"=>$id);
        $result=$this->db_model->getData('accountno,address,branch,dob,email,empcategory,userid,fname,gender,hiredate,homephone ,lname,mobile,nicno,photo','employee',$whereArr);
        $editdata['userData']=$result[0];
        $editdata["id"]=$id;
        $this->load->view("Employee/UpdateEmployee",$editdata,$id);
        var_dump($id);
        var_dump($id);
        }
        
        
        public function Updateemployee()
	{   
            $empcategory = $this->input->post("EmpCategory", TRUE);
            $empid = $this->input->post("EmpId", TRUE);
            $fname = $this->input->post("Fname", TRUE);
            $lname = $this->input->post("Lname", TRUE);
            $address = $this->input->post("Address", TRUE);
            $gender = $this->input->post("EmpGender", TRUE);
            $photo = $this->input->post("EmpPhoto", TRUE);
            $homephone = $this->input->post("Homephone", TRUE);
            $mobile = $this->input->post("MobilePhone", TRUE);
            $email = $this->input->post("Email", TRUE);
            $dob = $this->input->post("BirthDay", TRUE);
            $hiredate = $this->input->post("HireDate", TRUE);
            $bankacc = $this->input->post("BankAccount", TRUE);
            $branch = $this->input->post("BranchName", TRUE);
            $nic = $this->input->post("NIC", TRUE); 
            $ID=$this->input->post("hdnID",TRUE);
            
            $DataSet = array("accountno" => $bankacc, "address"=>$address , 'branch'=> $branch,'dob'=>$dob,'email'=>$email,
            'empcategory'=>$empcategory,'userid'=>$empid,'fname'=>$fname,'gender'=>$gender,'hiredate'=>$hiredate,
            'homephone'=>$homephone,'lname'=>$lname,'mobile'=>$mobile,'nicno'=>$nic,'photo'=>$photo);
            
            $whereArr=array("userid"=>$empid);
            $result = $this->db_model->updateData( "employee", $DataSet,$whereArr);
           
            redirect(base_url().'index.php/Employee/index');
            // var_dump($id);
                //$fieldset = array('accountno','address','branch','dob','email','empcategory','empid','fname','gender','hiredate','homephone','id','lname','mobile','nicno','photo');
                //$data['userData'] = $this->db_model->getData($fieldset,'employee');
		//$this->load->view('Employee/AddEmployee',$data);
	}
        
	 

//	function index()
//	{
//		$this->load->view('upload_form', array('error' => ' ' ));
//	}

	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('upload_success', $data);
		}
	}
        public function addemployee() {
        //var_dump(EmpCa);
        $empcategory = $this->input->post("EmpCategory", TRUE);
        $empid = $this->input->post("EmpId", TRUE);
        $fname = $this->input->post("Fname", TRUE);
        $lname = $this->input->post("Lname", TRUE);
        $address = $this->input->post("Address", TRUE);
        $gender = $this->input->post("EmpGender", TRUE);
        $photo = $this->input->post("EmpPhoto", TRUE);
        $homephone = $this->input->post("Homephone", TRUE);
        $mobile = $this->input->post("MobilePhone", TRUE);
        $email = $this->input->post("Email", TRUE);
        $dob = $this->input->post("BirthDay", TRUE);
        $hiredate = $this->input->post("HireDate", TRUE);
        $bankacc = $this->input->post("BankAccount", TRUE);
        $branch = $this->input->post("BranchName", TRUE);
        $nic = $this->input->post("NIC", TRUE);
        
        //$photo	=$_FILES["photo"]["name"];
//$path	="uploads/".$photo;
//move_uploaded_file($_FILES["photo"]["tmp_name"],$path);

        $DataSet = array("accountno" => $bankacc, "address"=>$address , 'branch'=> $branch,'dob'=>$dob,'email'=>$email,
            'empcategory'=>$empcategory,'userid'=>$empid,'fname'=>$fname,'gender'=>$gender,'hiredate'=>$hiredate,
            'homephone'=>$homephone,'lname'=>$lname,'mobile'=>$mobile,'nicno'=>$nic,'photo'=>$photo);
        //$whereArr = array("username" => $user, "password" => $psw);
        //var_dump($DataSet);
       $result = $this->db_model->insertData( "employee", $DataSet);
       redirect(base_url().'index.php/Employee/index'); 
//        $fieldset = array('accountno','address','branch','dob','email','empcategory','empid','fname','gender','hiredate','homephone','id','lname','mobile','nicno','photo');
//        $data['userData'] = $this->db_model->getData($fieldset,'employee');
//	$this->load->view('Employee/UpdateEmployee',$data);
    }
}
 