<!DOCTYPE html>
<html lang="en">
<head>  <?php $this->load->view('header-css');?>
	<meta charset="utf-8">
	<title>Add User</title>

	 
</head>
<body>
    
    <?php $this->load->view('Menubar/Menu');?>
    <div class="container">
    <div class="container">
        <center><h4>Add Employee</h4></center>
        <form role="form" class="form-actions form-search"  action=""  method="POST">
            <div class="table-responsive">
            <table class="table table-responsive container table-hover  ">
                <tr>
                    <td> <div class="form-group-lg">
                         <label> Employee Category:  </label>
            <select data-toggle="select" class="form-group form-control multiselect multiselect-danger mrs mbm" id="EmpCategory">
                <option value="" class="active">--Select--</option>
                <option value="Indoor">Indoor</option>
                <option value="Outdoor">Outdoor</option>
                <option value="Managing">Managing</option>
            </select></div>
                    </td>
                    <td> <div class="form-group-lg">
                         <label>Gender    : </label>
            <select data-toggle="select" class="form-group form-control multiselect multiselect-danger mrs mbm" id="EmpGender" >
            <option value="" class="active">--Select--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select></div>
                    </td>
                    <td> <div class="form-group-lg">
            <label for="photo">Photo  : </label>
            <input class="form-actions" type="file" id="EmpPhoto" value="Photo"/></div>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                    <div class="form-group-flat">
                        <label for="EmpID">Employee ID: </label><input class="form-control" type="text" id="EmpId" value="SME" /> 
                    </div>
                    </td>
                    <td>
                    <div class="form-group-flat">
                        <label for="FirstName">First Name: </label> <input class="form-control" type="text" id="EmpFName" value="" />
                    </div>    
                    </td>
                    <td>
                    <div class="form-group-flat">
                        <label for="LastName">Last Name : </label> <input class="form-control" type="text" id="EmpLName" value="" />
                    </div>    
                    </td>
                </tr>
                 <tr>
                    <td>
                    <div class="form-group-flat">
                        <label for="Address">Address   :</label> <input class="form-control" type="text" id="EmpAddress" value="" /> 
                    </div>
                    </td>
                    <td>
                    <div class="form-group-flat">
                         <label for="Home Phone" >Home Phone:</label> <input class="form-control"  type="text" id="EmpFName" value="" /> 
                    </div>    
                    </td>
                    <td>
                    <div class="form-group-flat">
                        <label for="Mobile Phone" >Mobile Phone :</label>  <input class="form-control"  type="text" id="EmpLName" value="" />    
                    </div>    
                    </td>
                </tr>
                 <tr>
                    <td>
                    <div class="form-group-flat">
                         <label for="email">Email: </label><input class="form-control" type="text" id="EmpEmail" value="" />   
                    </div>
                    </td>
                    <td>
                    <div class="form-group-flat">
                        <label for="Birthday">Birth Day : </label> <input class="form-control"   type="text" id="EmpBD" value="" />  
                    </div>    
                    </td>
                    <td>
                    <div class="form-group-flat">
                        <label for="Hire Date">Hire Date : </label> <input class="form-control"   type="text" id="EmpHD" value=""  /> 
                    </div>    
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="btn btn-primary btn-lg btn-block"type="button" value="Save" name="Save"/> 
                    </td>
                </tr>
            </table>
            </div>
        </div>
    </div>
</form>
     
     <?php $this->load->view('FlatUI');?>
</body>
</html>