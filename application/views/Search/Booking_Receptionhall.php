<!DOCTYPE html>
<html lang="en">
<head>  <?php $this->load->view('header-css');?>
	<meta charset="utf-8">
	<title>Reception Hall</title>
</head>
<body>
    <div class="container">
        <?php $this->load->view('Menubar/Menu');?>
    <h1>Booking Reception Hall</h1>
    </div><br/>
<!--    <div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
    </div>
</div>-->
    <div class="container">
        <form class="form-signin"> 
    <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
            <label for="NameOfGust">Name Of Guest:</label>
                <input class="form-control" type="text" id="NameOfGuest"/>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
             <label for="Address"> Address:</label>
                        <input class="form-control" type="text" id="Address"/>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
             <label for="NameOfGust">Function Date:</label>
                        <input class="form-control" type="text" id="NameOfGuest"/>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
             <label for="Address"> No Of Pax:</label>
                        <input class="form-control" type="text" id="Address"/>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
             <label for="Address"> Menu No:</label>
                        <input class="form-control" type="text" id="Address"/>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
             <label for="NameOfGust">Hall Chargers:</label>
                        <input class="form-control" type="text" id="NameOfGuest"/>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
             <label for="Address"> Room Type:</label>
                        <input class="form-control" type="text" id="Address"/>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
            <label for="Address"> Arrival:</label>
                        <input class="form-control" type="text" id="Address"/> 
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
            <label for="Address"> Departure:</label>
                        <input class="form-control" type="text" id="Address"/> 
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
            <label for="Address"> Terms:</label>
                        <input class="form-control" type="text" id="Address"/> 
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
           <label for="Address" > Advanced Paid:</label>
                        <input class="form-control" type="text" id="Address" value="Rs:"/>  
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
           <label for="ContactNo">Contact No: </label>
                        <input class="form-control" type="text" id="ContactNo"/>  
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
             
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
            <input class="btn btn-primary btn-lg btn-block" type="button" value="Save"/>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
             <input class="btn btn-primary btn-lg btn-block" type="button" value="Save"/>
        </div>
    </div>
     
            
        </form>
    </div>
     <?php $this->load->view('FlatUI');?>
</body>
</html>