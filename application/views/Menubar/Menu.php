<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sun & Moon Resort</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <?php $this->load->view('FlatUI');?>

     
  </head>
  <body>
 
  <div class="container">
  <h4 class="demo-panel-title"></h4>
      <div class="row demo-row">
        <div class="col-xs-12">
             <nav role="navigation" class="navbar navbar-inverse navbar-embossed">
        <div class="navbar-header">
        <a href="#" class="navbar-brand">Sun & Moon Logo</a>
        </div>
        <div id="bs-example-navbar-collapse-17" class="collapse navbar-collapse">
            <p class="navbar-text navbar-right">Welcome <a class="navbar-link" href="#">
                <?php $currentUser = $this->session->userdata('login_user');
                    echo   " ". $currentUser['user'];
                    echo "<br> You are logged in at " . $currentUser['logtime']." ";
                ?>
                  <a href="<?php echo base_url() . "index.php/login/logout/" ?>">Logout</a></a>
            </p>
        </div>
      </nav>
          <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
              </button>
               
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
              <ul class="nav navbar-nav navbar-left">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">File <b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
            <li role="presentation" class="active"><a href="<?php echo base_url()?>index.php/File/Room">Rooms</a></li>
            <li role="presentation" class="active"><a href="<?php echo base_url()?>index.php/File/Reception_Hall">Reception Hall</a></li>
            <li role="presentation" class="active"><a href="<?php echo base_url() . "index.php/login/logout/" ?>">Log Out</a></li>
            <li role="presentation" class="active"><a href="<?php echo base_url()?>index.php/File/">Exit</a></li>
        </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Transaction <b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                <li role="presentation"><a href="<?php echo base_url()?>index.php/Transaction/Booking">Booking</a></li>
                <li role="presentation"><a href="<?php echo base_url()?>index.php/Transaction/Check_Out">Check Out</a></li>
                <li role="presentation"><a href="<?php echo base_url()?>index.php/Transaction/Check_In">Check In</a></li>
            </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search <b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                <li role="presentation"><a href="<?php echo base_url()?>index.php/Search/Booking_ReceptionHall">Booking Reception Hall</a></li>
                <li role="presentation"><a href="<?php echo base_url()?>index.php/Search/Booking_Room">Booking Rooms</a></li>
                <li role="presentation"><a href="<?php echo base_url()?>index.php/Search/Check_In_Receptionhall">Check In Reception Hall</a></li>
                <li role="presentation"><a href="<?php echo base_url()?>index.php/Search/Check_In_Room">Check In Rooms</a></li>
        </ul>
                </li>
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Library <b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                <li role="presentation"><a href="<?php echo base_url()?>index.php/Library/Client_Information">Client Info</a></li>
                <li role="presentation"><a href="<?php echo base_url()?>index.php/Library/Room_Information">Room Info</a></li>
            </ul>
                </li>
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Users <b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                <li role="presentation"><a href="<?php echo base_url()?>index.php/Users/Add">Add User</a></li>
                <li role="presentation"><a href="<?php echo base_url()?>index.php/Users/Update">Edit User</a></li>
        </ul>
                </li>
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee <b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                <li role="presentation"><a href="<?php echo base_url()?>index.php/Employee/Add">Add Employee</a></li>
                <li role="presentation"><a href="<?php echo base_url()?>index.php/Employee/UpdateEmployee">Edit Employee</a></li>
        </ul>
                </li>
               </ul>
               <form class="navbar-form navbar-right" action="#" role="search">
                <div class="form-group">
                  <div class="input-group">
                    <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
                    <span class="input-group-btn">
                      <button type="submit" class="btn"><span class="fui-search"></span></button>
                    </span>
                  </div>
                </div>
              </form>
            </div><!-- /.navbar-collapse -->
          </nav><!-- /navbar -->
        </div>
      </div> <!-- /row -->
	  </div>
    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
     <?php $this->load->view('FlatUIJs');?>
  </body>
</html>
