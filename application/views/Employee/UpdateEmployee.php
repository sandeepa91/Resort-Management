<!DOCTYPE html>
<html lang="en">
<head>  <?php $this->load->view('header-css');?>
	<meta charset="utf-8">
	<title>Update Users</title>

	 
</head>
<body><div class="container">
    <?php $this->load->view('Menubar/Menu');?>
        <center><h4>Update Employee</h4></center>
        <form class="form-signin"  action="<?php echo base_url()?>index.php/Employee/Updateemployee" method="post">
     <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label> Employee Category:  </label>
            <select data-toggle="select" class="form-group form-control" id="EmpCategory" name="EmpCategory" value="<?php echo $userData->empcategory; ?>">
                    <option value="" class="active">--Select--</option>
                    <option value="Management">Management</option>
                    <option value="F&B">F&B Department</option>
                    <option value="Kitchen">Kitchen Department</option>
                    <option value="House">House Keeping</option>
                    <option value="Maintenance">Maintenance/Garden</option>
                </select>  
                 
            <label>Gender    : </label>
            <select data-toggle="select" class="form-group form-control"  id="EmpGender" name="EmpGender" value="<?php echo $userData->gender; ?>" >
                    <option value="" class="active">--Select--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
            </select> 
     
            <label for="photo">Photo  : 
                <input class="form-actions form-control" type="file" id="EmpPhoto" name="EmpPhoto" value="<?php echo $userData->gender; ?>" />  </label>
        </div>
    </div>
     
    <div class="col-md-4 col-sm-6">
    	<div class="panel-body">
            <label for="EmpID">Employee ID:</label> <?php echo "<h7>".$userData->userid."</h7>"; ?> 
            <input class="form-control" type="hidden" id="EmpId" name="EmpId" value="<?php echo $userData->userid; ?>"  />
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label for="inputEmail" >First Name:</label>
            <input type="text" id="Fname" name="Fname" class="form-control" placeholder="First Name" value="<?php echo $userData->fname; ?>"  >
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label for="LastName" >Last Name:</label>
            <input type="text" id="Lname" name="Lname" class="form-control" placeholder="Last Name" value="<?php echo $userData->lname; ?>"  >
        </div>
    </div>
            
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label for="inputEmail" >Address:</label> 
            <input type="text" id="Address" name="Address" class="form-control" placeholder="Address" value="<?php echo $userData->address; ?>"  >
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">         
            <label for="Home Phone" >Home Phone:</label> 
            <input type="number" class="form-control" id="Homephone" name="Homephone"   placeholder="Home Phone" value="<?php echo $userData->homephone; ?>"    /> 
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label for="MobilePhone:" >Mobile Phone:</label>
            <input type="number" id="MobilePhone" name="MobilePhone" class="form-control" placeholder="Mobile Phone" value="<?php echo $userData->mobile; ?>"  > 
        </div>        
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label for="Email" >Email:</label> 
            <input type="email" name="Email" id="Email" class="form-control" placeholder="Email" value="<?php echo $userData->email; ?>"  > 
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
    	<div class="panel-body">
            <label for="inputEmail" >Birth Day:</label>
            <input type="date" id="BirthDay" name="BirthDay" class="form-control" placeholder="Birth Day" value="<?php echo $userData->dob; ?>"  >   
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
    	<div class="panel-body">
            <label for="inputEmail" >Hire Date:</label>
            <input type="date" id="HireDate" name="HireDate" class="form-control" placeholder="Hire Date" value="<?php echo $userData->hiredate; ?>" >   
        </div> 
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label for="BankAccount" >Bank Account:</label> 
            <input type="text" id="BankAccount" name="BankAccount" class="form-control" placeholder="Bank Account"  value="<?php echo $userData->accountno; ?>"   > 
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
    	<div class="panel-body">
            <label for="BranchName" >Branch Name:</label>
            <input type="text" id="BranchName" name="BranchName" class="form-control" placeholder="Branch Name" value="<?php echo $userData->branch; ?>"  >   
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
    	<div class="panel-body">
            <label for="NICNO" >NIC NO:</label>
            <input type="text" id="NIC" name="NIC" class="form-control" placeholder="NIC NO" value="<?php echo $userData->nicno; ?>"  >   
        </div> 
    </div>
     
    <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
            <input value="<?php echo $userData-> userid; ?>" type="hidden" name="hdnID" id="hdnID">
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
<?php $this->load->view('FlatUI');?>
</body>
</html>