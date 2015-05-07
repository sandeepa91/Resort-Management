<!DOCTYPE html>
<html lang="en">
  <head>
      <?php $this->load->view('header-css');?>
    <meta charset="utf-8">
    <title>Sun & Moon Resort</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <?php $this->load->view('FlatUI');?>

     
  </head>
  <body>
      <div class="container">
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
            echo "<br> You are logged in at " . $currentUser['logtime'];
                ?></a>
          </p>
         
        </div>
      </nav>
        </div>
  </div>        
  </div>
       
        
    
     <div class="container">
       <nav class="navbar navbar-inverse navbar-lg navbar-embossed" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-9">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Log In</a>
          </div>
          <div class="navbar-collapse collapse" id="navbar-collapse-9">
            <form class="navbar-form navbar-right" action="<?php echo base_url()?>index.php/login/verifyUser"   method="post" role="form">
              <div class="form-group">
                  <input class="form-control" placeholder="Username" type="text" name="txtName" id="txtName">
              </div>
              <div class="form-group">
                  <input class="form-control" type="password" placeholder="Password" name="txtPassword" id="txtPassword">
              </div>
                
               <input class="form-control btn btn-success" value="Sign In" type="submit" name="btnSubmit" id="btnSubmit">
               
            </form>

          </div><!--/.navbar-collapse -->
        </div>
      </nav>
         
          
    <input class="form-control btn btn-success" value="Invalid user, Please enter correct login information. " >
                 
	
            <div class="row">
                <div class="span12">
                                 
                    <div class="page-header container">
                        <img class="img-responsive" src="<?php echo base_url()?>img/banner.jpg"   /> 
                        <h3>Sun & Moon Resort Management System</h3>
                        
                    </div>
                    
                </div>
            </div>
				 
	</div>
          <?php $this->load->view('FlatUIJs');?>
  </body>
</html>
