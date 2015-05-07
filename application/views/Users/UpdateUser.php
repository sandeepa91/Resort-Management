<!DOCTYPE html>
<html lang="en">
<head>  <?php $this->load->view('header-css');?>
	<meta charset="utf-8">
	<title>Update Users</title>

	 
</head>
<body>
    <div class="container">
        <?php $this->load->view('Menubar/Menu');?>
    <h5>Update Users</h5>
    </div>
     <?php $this->load->view('FlatUI');?>
    <!--main-->
<div class="container" id="main">
    <hr>
  
   <div class="row">
<form class="form " action="<?php echo base_url()?>index.php/Users/updatesystemuser"   method="post"  >
    
    
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label for="EmpID">Employee ID:</label> 
            <input class="form-control" type="text" id="EmpId" name="EmpId" value="<?php echo $userData->empid; ?>"  />
        </div>
   
    </div>
    
     
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label for="Username" >Username:</label>
            <input type="text" id="Username" name="Username" class="form-control" placeholder="Username" value="<?php echo $userData->username; ?>"    >
        </div>
    </div>
    
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label> Access Level:  </label>
            <select data-toggle="select" class="form-group form-control  " id="AccessLevel" name="AccessLevel" value="<?php echo $userData->accesslevel; ?>">
                    <option value="" class="active">--Select--</option>
                    <option value="Super">Super Admin</option>
                    <option value="Administrator">Administrator</option>
                    <option value="Editor">Editor</option>
                </select>  
        </div> 
    </div>  
     
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label for="Password" >Password:</label>
            <input type="Password" id="Password" name="Password" class="form-control" placeholder="Password"  >
        </div>
    </div>
            
     
     
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label for="Password" >Confirm Password:</label> 
            <input type="Password" name="CPassword" id="CPassword" class="form-control" placeholder="Confirm Password"   > 
        </div>
    </div>
       <div class="col-md-4 col-sm-6">
         <div class="panel-body">
            <label for="Email" >Email:</label> 
            <input type="email" name="Email" id="Email" class="form-control" placeholder="Email" value="<?php echo $userData->email; ?>" > 
        </div>
    </div>
   <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
            <input value="<?php echo $userData-> id; ?>" type="hidden" name="hdnID" id="hdnID">
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
    
     
    <hr>
    
</div><!--/main-->
</body>
</html>