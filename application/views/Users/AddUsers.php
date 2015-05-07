<!DOCTYPE html>
<html lang="en">
<head>  <?php $this->load->view('header-css');?>
	<meta charset="utf-8">
	<title>Add System User</title>

	 
</head>
<body>
<div class="container">
    <?php $this->load->view('Menubar/Menu');?>
    <?php $this->load->view('FlatUI');?>
<div class="container">
 <!--main-->
<div class="container" id="main">
    <h6> Add System User </h6>   
  <hr>
  <div class="row">
<form class="form " action="<?php echo base_url()?>index.php/Users/addsystemuser"   method="post"  >
    
    
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label for="EmpID">Employee ID:</label> 
            <input class="form-control" type="text" id="EmpId" name="EmpId" value="SME"  />
        </div>
   
    </div>
    
     
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label for="Username" >Username:</label>
            <input type="text" id="Username" name="Username" class="form-control" placeholder="Username"  >
        </div>
    </div>
    
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label> Access Level:  </label>
            <select data-toggle="select" class="form-group form-control  " id="AccessLevel" name="AccessLevel">
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
            <input type="Password" name="CPassword" id="CPassword" class="form-control" placeholder="Confirm Password"  > 
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
  <hr><center>
   <div id="AllEmployee" class="container table-responsive">
            <?php
          // var_dump($data);
  
          echo "<table class='table-responsive table-striped table-bordered table-hover table-condensed'><tr class='success'><th>Update</th><th>Delete</th><th>View</th>"
            . " <th>Employee ID</th>"
            . "<th>Username</th>"
            . "<th>Access Category</th>"
              . "<th>Email</th></tr>";
          foreach($userData as $Items){
               //echo "<tr><td>".$Items->photo."</td>"; <input type='file' name='imagepath'>
                echo "<tr><td><a href='".base_url()."index.php/Users/edit/".$Items->userid."'><i class='fui-new'></i></a></td>";
                echo "<td><a href='".base_url()."index.php/Users/delete/".$Items->userid."'><i class='fui-cross-circle'></i></a></td>";
                echo "<td><a href='view.php'><i class='fui-eye'></i></a></td>";  
                //echo "<td><img src='$Items->photo' height='75' width='75'></td>"; 
                echo "<td> $Items->userid </td>";
                echo "<td> $Items->username </td>"; 
                echo "<td> $Items->accesslevel </td>";
                //echo "<td> $Items->address </td>";<th>Address</th>
               //echo "<td> $Items->homephone </td>";<th>Home Phone</th>
                
               ///echo "<td> $Items->gender </td>";<th>Gender</th>
               //echo "<td> $Items->email </td>";<th>Email</th>
                echo "<td> $Items->email </td>";
                //echo "<td> $Items->accountno </td>";
               // echo "<td> $Items->branch </td>";<th>Branch</th>
               // echo "<td>".$Items->hiredate."</td></tr>";<th>Hire Date</th>
            }
          echo '</table>';
            ?>
        </div></center>
</div><!--/main-->
<hr>     
</div>
</body>
</html>