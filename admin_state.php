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
					<i class='fa fa-users'></i> Donor Deletion
                </h3><hr>
						

            </div>
        </div>
	
	
			<div class="row centered-form ">
		    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center" style="padding:5px;font-size:16px;font-weight:bold"><span class="fa fa-user "> </span> DELETE A  BLOOD DONOR</h3>
                    </div>
					
                    <div class="panel-body">
						<form method="post" action="admin_state.php" autocomplete="on" >
						<div class="form-group">
							<label class="control-label text-primary" for="NAME"  >Name</label>
							<input type="text" placeholder="Full Name"  name="USERNAME"  required class="form-control input-sm">
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
								<label class="control-label text-primary" for="CONTACT_1" >Contact-1</label>
                                <input type="text"  name="CONTACT1"  class="form-control" placeholder="Contact No-1">
                        
						  
							
	
			
						
						 <br>
						 <br>
					
						
						  <div class="form-group">
							<button class="btn btn-primary" type="submit" name="SUBMIT" >Delete donor now</button>
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
				
				@$bloodgroup=$_POST['BLOODGROUP'];
				
				@$contact1=$_POST['CONTACT1'];
				
				
				//echo $gender;
				
					$query = "delete from donor where username='$username' and bloodgroup='$bloodgroup' and contact1='$contact1'";
					
						//echo $query;
				$query_run = mysqli_query($con,$query);
				$num_rows = mysqli_num_rows($query_run);
				//echo mysql_num_rows($query_run);
				if($num_rows>0)
					{
						
							
								echo '<script type="text/javascript">alert("Donor successfully deleted")</script>';
								
							}
							else
							{
								echo '<script type="text/javascript">alert("cannot find donor with given details")</script>';
							}
						
					}
				
				
			
		?>

 
 
</body>
</html>