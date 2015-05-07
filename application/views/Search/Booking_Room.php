<!DOCTYPE html>
<html lang="en">
<head>  <?php $this->load->view('header-css');?>
	<meta charset="utf-8">
	<title>Reception Hall</title>

	 
</head>
<body>
    <div class="container">
        <?php $this->load->view('Menubar/Menu');?>
    <h6>Booking Room</h6>
    </div>
    <div class="container">
    <form> 
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
            <label for="Address"> Email:</label>
                        <input class="form-control" type="text" id="Address"/>            
        </div>
    </div>        
    <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
            <label for="BookingDate">Booking Date: </label>
                        <input class="form-control" type="text" id="BookingDate"/>
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
            <label for="ContactNo">Contact No: </label>
                        <input class="form-control" type="text" id="ContactNo"/> 
        </div>
    </div>        
    <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
            <label for="Address"> Booking Type:</label>
            <select data-toggle="select" class="form-group form-control  " id="EmpGender" >
                    <option value="" class="active">--Select--</option>
                    <option value="F/B">F/B</option>
                    <option value="H/B">H/B</option>
                    <option value="B/B">B/B</option>
                </select>     
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
            <label for="Address"> Room Type:</label>
            <select data-toggle="select" class="form-group form-control  " id="EmpGender" >
                    <option value="" class="active">--Select--</option>
                    <option value="Double">Double</option>
                    <option value="Single">Single</option>
                </select> 
        </div>
    </div>
        
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label for="NameOfGust">Room Rate:</label>
                        <input class="form-control" type="text" id="NameOfGuest"/>
        </div>
    </div>        
    <div class="col-md-4 col-sm-6">
        <div class="panel-body">
            <label for="NameOfGust">Agent:</label>
                        <input class="form-control" type="text" id="NameOfGuest"/>
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
             
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
            <input class="btn btn-primary btn-lg btn-block" type="button" value="Book Room"/>    
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class=" panel-body">
            <input class="btn btn-primary btn-lg btn-block" type="button" value="Cancel"/>
        </div>
    </div>
        </form>
    </div>
     <?php $this->load->view('FlatUI');?>
</body>
</html>