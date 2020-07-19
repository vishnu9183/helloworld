<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php");?>

</head>
<body>
   
   
<?php
include("top_nav.php");
?>
    <div class="container"  style='margin-top:70px;'>
        <div class="row">
            <div class="col-lg-12">
				 <h3 class=" text-primary">
					<i class='fa fa-heart'></i>  Need Blood To Save Life
                </h3><hr>
            </div>
        </div>
		<?php  include("blood_bread.php"); ?>


<table style="width:100%; color:red; font-family:monospace; font-size:25px; text-align:left;">
	<tr>
	<th>USERNAME</th>
	<th>BLOODGROUP</th>
	<th>CONTACT</th>
	<th>CONTACT2</th>
	<th>EMAIL</th>
</tr>
   

		

        <?php
			if(isset($_POST['SUBMIT']))
			{
				$con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
                  mysqli_select_db ($con,'logindb');
				@$patientname=$_POST['PATIENTNAME'];
				@$gender=$_POST['GENDER'];
				@$bloodgroup=$_POST['BLOODGROUP'];
				@$units=$_POST['UNITS'];
				@$hospital=$_POST['HOSPITAL'];
				@$city=$_POST['CITY'];
				@$pincode=$_POST['PINCODE'];
				@$doctorname=$_post['DOCTORNAME'];
				@$rdate=$_POST['RDATE'];
				@$email=$_POST['EMAIL'];
				@$con1=$_POST['CON1'];
				@$con2=$_POST['CON2'];
				
				
				
				
					$query = "insert into user values('$patientname','$gender','$bloodgroup','$units','$hospital','$city','$pincode','$doctorname','$rdate','$email','$con1','$con2')";
						//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						
							
								
								$query = "select * from donor where bloodgroup='$bloodgroup'";
					       //echo $query;
			        	$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				            if($query_run)
					      {
						
							
							
								while($row=mysqli_fetch_assoc($query_run))
								{
									
									echo "<tr><td>".$row["username"]."</td><td>".$row["bloodgroup"]."</td><td>".$row["contact1"]."</td><td>".$row["contact2"]."</td><td>".$row["email"]."</td></tr>";
								
								}
					              	echo "</table>";
				             	}
					
								
							else
							{
								echo '<p class="bg-danger msg-block">NO DONOR FOUND WITH THE BLOOD GROUP</p>';
							}
								
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						
					}
				
				
			
		?>

		<div class="row centered-form">
		    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center" style="padding:5px;font-size:16px;font-weight:bold"><span class="fa fa-envelope "> </span> Need Blood To Save Lifes</h3>
                    </div>
                    <div class="panel-body">
					<p id="errorBox"></p>
					
					
					<form autocomplete="on" method="post"  action="request_blood.php" enctype="multipart/form-data">
						<div class="form-group">
							<label class="control-label text-primary">Patient Name</label>
							<input type="text" placeholder="Patient Name" name="PATIENTNAME"  required id="NAME" class="form-control input-sm">
						</div>
						
								<div class="form-group">
							<label class="control-label text-primary"  for="GENDER">Gender</label>
								<select id="gen" name="GENDER" required class="form-control input-sm">
									<option value="">Select Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Other">Other</option>
								
								</select>
						</div>
						
						
						<div class="form-group">
							<label class="control-label text-primary">Required Blood Group</label>
								<select name="BLOODGROUP" id="BLOOD" required  class="form-control input-sm">
							<option value="">Select Blood</option>
							<option value="A+">A+</option>
							<option value="B+">B+</option>
							<option value="O+">O+</option>
							<option value="AB+">AB+</option>
							<option value="A1+">A1+</option>
							<option value="A2+">A2+</option>
							<option value="A1B+">A1B+</option>
							<option value="A2B+">A2B+</option>
							<option value="A-">A-</option>
							<option value="B-">B-</option>
							<option value="O-">O-</option>
							<option value="AB-">AB-</option>
							<option value="A1-">A1-</option>
							<option value="A2-">A2-</option>
							<option value="A1B">A1B-</option>
							<option value="A2B">A2B-</option>
							<option value="A2B">Bombay o+</option>
							<option value="A2B">Bombay o-</option>

								</select>
						</div>
						 <div class="form-group">
								<label class="control-label text-primary">Need Unit Of Blood</label>
                                <input type="text" required name="UNITS" id="BUNIT" class="form-control" placeholder="Insert No Of Unit">
                          </div>
						<div class="form-group">
								<label class="control-label text-primary">Hospital Name &amp; Address</label>
                                <textarea required name="HOSPITAL" id="HOSP" rows="5" style="resize:none;"class="form-control" placeholder="Hospital Full Address"></textarea>
                          </div>
						 <div class="form-group">
								<label class="control-label text-primary">City</label>
                                <input type="text" required name="CITY" id="CITY" class="form-control" placeholder="Insert City">
                          </div>
						   <div class="form-group">
								<label class="control-label text-primary">Pincode</label>
                                <input type="text" required name="PINCODE" id="PIN" class="form-control" placeholder="Insert Pincode">
                          </div>
						  <div class="form-group">
							<label class="control-label text-primary">Doctor Name</label>
							<input type="text" placeholder="Doctor Name" class="form-control input-sm" name="DOCTORNAME" id="DOC">
						</div>
						<div class="form-group">
							<label class="control-label text-primary">When Required</label>
							<input type="text" placeholder="MM/DD/YYYY" class="form-control input-sm DATES" name="RDATE" id="RDATE">
						</div>
						
						
						
						<div class="form-group">
							<label class="control-label text-primary">Email ID</label>
							<input type="text" placeholder="Contact Email" class="form-control input-sm" name="EMAIL" id="EMAIL">
						</div>
						<div class="form-group">
							<label class="control-label text-primary">Contact No-1</label>
							<input type="text" placeholder="Contact Number" class="form-control input-sm" name="CON1" id="CON1">
						</div>
							<div class="form-group">
							<label class="control-label text-primary">Contact No-2</label>
							<input type="text" placeholder="Contact Number" class="form-control input-sm" name="CON2" id="CON2">
					   <br>
					   <br>
						  
						  
						   <div class="form-group">
							<button class="btn btn-primary" id="BTN" name="SUBMIT"><i class="fa fa-send"></i> Request Now</button>
						  </div>
						 </form>
                    </div>
                </div>
            </div>
            </div>
        
        </div>
			
 
	
</body>
</html>