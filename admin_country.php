<?php 
include("config.php"); 
//include("functions.php"); 

error_reporting(0);?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("admin_head.php");?>
</head>
<body>

<?php
include("admin_topnav.php");
?>  
    <div class="container" style='margin-top:70px;'>
        <div class="row">
            <div class="col-md-12">
                <h3 class=" text-primary">
					<i class='fa fa-users'></i> New Donor Registration
                </h3><hr>
						

            </div>
        </div>
	
	
			<div class="row centered-form ">
		    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center" style="padding:5px;font-size:16px;font-weight:bold"><span class="fa fa-user "> </span> JOIN AS BLOOD DONOR</h3>
                    </div>
					
                    <div class="panel-body">
						<form method="post" action="admin_country.php" autocomplete="on" >
						<div class="form-group">
							<label class="control-label text-primary" for="NAME"  >Name</label>
							<input type="text" placeholder="Full Name"  name="USERNAME"  required class="form-control input-sm">
						</div>
						<div class="form-group">
							<label class="control-label text-primary" for="FATHER_NAME">Father Name</label>
							<input type="text" placeholder="Father Name"  name="FATHERNAME" required class="form-control input-sm">
						</div>
						
				        	   <div class="form-group">
						<label class="control-label text-primary"  for="GENDER">Gender</label>
								<select  name="GENDER" required class="form-control input-sm">
									<option value="">Select Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Other">Other</option>
								</select>
						</div>
						
						<div class="form-group">
							<label class="control-label text-primary" for="DOB">D.O.B</label>
							<input type="text"  placeholder="YYYY/MM/DD"  name="DOB"  class="form-control input-sm DATES">
							
						</div>
						
						
						<div class="form-group">
							<label class="control-label text-primary" for="BLOOD" >Blood Group</label>
						<select  name="BLOODGROUP" required class="form-control input-sm">	
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
							<label class="control-label text-primary" for="BODY_WEIGHT" >Body Weight</label>
							<input type="text" required placeholder="Weight In Kgs"  name="BODYWEIGHT"  class="form-control input-sm">
						</div>
						 <div class="form-group">
								<label class="control-label text-primary" for="EMAIL" >Email ID</label>
                                <input type="email"  name="EMAIL"  class="form-control" placeholder="Email Address">
                          </div>
	
						   <div class="form-group">
								<label class="control-label text-primary" for="COUNTRY" >ENTER COUNTRY</label>
                                <input type="text"   name="COUNTRY"  class="form-control" placeholder="Enter country name">
                          </div>
						  
				  		<div class="form-group">
								<label class="control-label text-primary" for="STATE">State</label>
                                <select name="STATE"  required class="form-control">	
								<option value="">Select State</option>
								<option value=Andhra Pradesh>Andhra Pradesh</option>
                                 <option value=Andaman and Nicobar Islands>Andaman and Nicobar Islands</option>
                                  <option value=Arunachal Pradesh>Arunachal Pradesh</option>
                                  <option value=Assam>Assam</option>
                                   <option value=Bihar>Bihar</option>
                                   <option value=Chandigarh>Chandigarh</option>
                                     <option value=Chhattisgarh>Chhattisgarh</option>
                                     <option value=Dadar and Nagar Haveli>Dadar and Nagar Haveli</option>
                                      <option value=Daman and Diu>Daman and Diu</option>
                                       <option value=Delhi>Delhi</option>
                                       <option value=Lakshadweep>Lakshadweep</option>
                                       <option value=Puducherry>Puducherry</option>
                                        <option value=Goa>Goa</option>
                                         <option value=Gujarat>Gujarat</option>
                                         <option value=Haryana>Haryana</option>
                                         <option value=Himachal Pradesh>Himachal Pradesh</option>
                                          <option value=Jammu and Kashmir>Jammu and Kashmir</option>
                                            <option value=Jharkhand>Jharkhand</option>
                                                <option value=Karnataka>Karnataka</option>
                                               <option value=Keral>Kerala</option>
                                               <option value=Madhya Pradesh>Madhya Pradesh</option>
                                               <option value=Maharashtra>Maharashtra</option>
                                                <option value=Manipur>Manipur</option>
                                              <option value=Meghalaya>Meghalaya</option>
                                            <option value=Mizoram>Mizoram</option>
                                            <option value=Nagaland>Nagaland</option>
                                                <option value=Odisha>Odisha</option>
                                               <option value=Punjab>Punjab</option>
                                                 <option value=Rajasthan>Rajasthan</option>
                                               <option value=Sikkim>Sikkim</option>
                                             <option value=Tamil Nadu>Tamil Nadu</option>
                                              <option value=Telangana>Telangana</option>
                                                <option value=Tripura>Tripura</option>
                                             <option value=Uttar Pradesh>Uttar Pradesh</option>
                                                <option value=Uttarakhand>Uttarakhand</option>
                                               <option value=West Bengal>West Bengal</option>
								</select>
                          </div>
						    <div class="form-group">
								<label class="control-label text-primary" for="CITY" >ENTER CITY</label>
                                <input type="text"  name="CITY"  class="form-control" placeholder="Enter city name">
                          </div>

						
						  
						   					  <div class="form-group">
								<label class="control-label text-primary" for="ADDRESS">Address</label>
                                <textarea name="ADDRESS"  rows="5" style="resize:none;"class="form-control" placeholder="Full Address"></textarea>
                          </div>

						  <div class="form-group">
								<label class="control-label text-primary" for="PINCODE">Pincode</label>
                                <input type="text" name="PINCODE"  class="form-control" placeholder="Insert Pincode">
                          </div>
						  
						  
						   
						  
						  
						   <div class="form-group">
								<label class="control-label text-primary" for="CONTACT_1" >Contact-1</label>
                                <input type="text"  name="CONTACT1"  class="form-control" placeholder="Contact No-1">
                          </div>
						   <div class="form-group">
								<label class="control-label text-primary" for="CONTACT_2" >Contact-2</label>
                                <input type="text"  name="CONTACT2"  class="form-control" placeholder="Contact No-2">
                          </div>
						  <hr>
						  
							
	
						  <hr>
						
						
						
							  <div class="form-group">
								<label class="control-label text-success"><input type="checkbox" checked id="c2">&nbsp; I have read the eligibility criteria and confirm that i am eligible to donate blood.</label> 
								<label class="control-label text-success"><input type="checkbox" checked id="c3" >&nbsp; I agree to the Term and Conditions and consent to have my contact and donor information published to the potential blood recipients.</label>
						  </div>
						
					
						
						  <div class="form-group">
							<button class="btn btn-primary" type="submit" name="SUBMIT" >Register Now</button>
						  </div>
						 </form>
                    </div>
                </div>
            </div>
			 
            
        </div>
        
       
    </div>    
	
	<?php
			if(isset($_POST['SUBMIT']))
			{
				$con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
                  mysqli_select_db ($con,'logindb');
				@$username=$_POST['USERNAME'];
				@$fathername=$_POST['FATHERNAME'];
				@$gender=$_POST['GENDER'];
				@$dob=$_POST['DOB'];
				@$bloodgroup=$_POST['BLOODGROUP'];
				@$bodyweight=$_POST['BODYWEIGHT'];
				@$email=$_POST['EMAIL'];
				@$country=$_post['COUNTRY'];
				@$state=$_POST['STATE'];
				@$city=$_POST['CITY'];
				@$address=$_POST['ADDRESS'];
				@$pincode=$_POST['PINCODE'];
				@$contact1=$_POST['CONTACT1'];
				@$contact2=$_POST['CONTACT2'];
				
				echo $gender;
				
					$query = "insert into donor values('$username','$fathername','$gender','$dob','$bloodgroup','$bodyweight','$email','$country','$state','$city','$address','$pincode','$contact1','$contact2')";
					
						//echo $query;
							 $numberOfDigits = strlen($contact1);
							 $numberofdigits1 =strlen($contact2);
    if ($numberOfDigits != 10 || $numberOfDigits1 != 10  ) {
   
        echo '<script type="text/javascript">alert("PHONE NUMER LENGTH SHOULD NOT BE LESS THAN 10")</script>';
    }
               else
			   {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $emailErr = "Invalid format and please re-enter valid email"; 
                                     }
									 else
									 {
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						
							
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						
					}
			   }
			}
				
				
			
		?>

 
 
</body>
</html>