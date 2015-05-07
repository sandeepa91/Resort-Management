<!DOCTYPE html>
<html lang="en">
<head>  <?php $this->load->view('header-css');?>
	<meta charset="utf-8">
	<title>Add User</title>

	 
</head>
<body>
    
<?php $this->load->view('Menubar/Menu');?>
<div class="container">
    <center><h4>Add Employee</h4></center>
         
     
<div class="row">
<form class="form " action="<?php echo base_url()?>index.php/Employee/addemployee"   method="post"  >
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label> Employee Category:  </label>
            <select data-toggle="select" class="form-group form-control  " id="EmpCategory" name="EmpCategory">
                    <option value="" class="active">--Select--</option>
                    <option value="Management">Management</option>
                    <option value="F&B">F&B Department</option>
                    <option value="Kitchen">Kitchen Department</option>
                    <option value="House">House Keeping</option>
                    <option value="Maintenance">Maintenance/Garden</option>
                </select>  
                 
            <label>Gender    : </label>
            <select data-toggle="select" class="form-group form-control"  id="EmpGender" name="EmpGender" >
                    <option value="" class="active">--Select--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select> 
     
            <label for="photo">Photo  : 
                <input class="form-actions form-control" type="file" id="EmpPhoto" name="EmpPhoto" value="Photo"/>  </label>
        </div>
    </div>
     
    <div class="col-md-4 col-sm-6">
    	<div class="panel-body">
            <label for="EmpID">Employee ID:</label> 
            <input class="form-control" type="text" id="EmpId" name="EmpId" value="SME"  />
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label for="inputEmail" >First Name:</label>
            <input type="text" id="Fname" name="Fname" class="form-control" placeholder="First Name"  >
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label for="LastName" >Last Name:</label>
            <input type="text" id="Lname" name="Lname" class="form-control" placeholder="Last Name"  >
        </div>
    </div>
            
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label for="inputEmail" >Address:</label> 
            <input type="text" id="Address" name="Address" class="form-control" placeholder="Address"  >
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">         
            <label for="Home Phone" >Home Phone:</label> 
            <input type="number" class="form-control" id="Homephone" name="Homephone"   placeholder="Home Phone"  /> 
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label for="MobilePhone:" >Mobile Phone:</label>
            <input type="number" id="MobilePhone" name="MobilePhone" class="form-control" placeholder="Mobile Phone"  > 
        </div>        
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label for="Email" >Email:</label> 
            <input type="email" name="Email" id="Email" class="form-control" placeholder="Email"  > 
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
    	<div class="panel-body">
            <label for="inputEmail" >Birth Day:</label>
            <input type="date" id="BirthDay" name="BirthDay" class="form-control" placeholder="Birth Day"  >   
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
    	<div class="panel-body">
            <label for="inputEmail" >Hire Date:</label>
            <input type="date" id="HireDate" name="HireDate" class="form-control" placeholder="Hire Date"  >   
        </div> 
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label for="BankAccount" >Bank Account:</label> 
            <input type="text" id="BankAccount" name="BankAccount" class="form-control" placeholder="Bank Account"  > 
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
    	<div class="panel-body">
            <label for="BranchName" >Branch Name:</label>
            <input type="text" id="BranchName" name="BranchName" class="form-control" placeholder="Branch Name"  >   
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
    	<div class="panel-body">
            <label for="NICNO" >NIC NO:</label>
            <input type="text" id="NIC" name="NIC" class="form-control" placeholder="NIC NO"  >   
        </div> 
    </div>
     
    <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <input type="submit" class="btn btn-primary btn-lg btn-block" value="submit" name="Save" id="submit"/>      
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
            <input type="button" class="btn btn-primary btn-lg btn-block"   value="Cancel" name="Cancel"/>
        </div>
    </div>
    <!--/articles-->
    </form>
    </div>
    </div>
    <hr>
<br/><center>
    <div id="AllEmployee" class="container table-responsive">
            <?php
          // var_dump($data);
  
          echo "<table class='table-responsive table-striped table-bordered table-hover table-condensed'><tr class='success'><th>Update</th><th>Delete</th><th>View</th><th>Photo</th><th>Employee ID</th>"
            . "<th>First Name</th><th>Last Name</th>"
            . "<th>Employee Category</th><th>Mobile Phone</th>"
              . "<th>Birth Day</th><th>Account No</th></tr>";
          foreach($userData as $Items){
               //echo "<tr><td>".$Items->photo."</td>"; <input type='file' name='imagepath'>
                echo "<tr><td><a href='".base_url()."index.php/Employee/edit/".$Items->userid."'><i class='fui-new'></i></a></td>";
                echo "<td><a href='".base_url()."index.php/user/delete/".$Items->userid."'><i class='fui-cross-circle'></i></a></td>";
                echo "<td><a href='view.php'><i class='fui-eye'></i></a></td>";  
                echo "<td><img src='$Items->photo' height='75' width='75'></td>"; 
                echo "<td> $Items->userid </td>";
                echo "<td> $Items->fname </td>";
                echo "<td> $Items->lname </td>";
                echo "<td> $Items->empcategory </td>";
                //echo "<td> $Items->address </td>";<th>Address</th>
               //echo "<td> $Items->homephone </td>";<th>Home Phone</th>
                echo "<td> $Items->mobile </td>";
               ///echo "<td> $Items->gender </td>";<th>Gender</th>
               //echo "<td> $Items->email </td>";<th>Email</th>
                echo "<td> $Items->dob </td>";
                echo "<td> $Items->accountno </td>";
               // echo "<td> $Items->branch </td>";<th>Branch</th>
               // echo "<td>".$Items->hiredate."</td></tr>";<th>Hire Date</th>
            }
          echo '</table>';
            ?>
        </div></center><br/>
 <?php $this->load->view('FlatUI');?>
</body>
</html>