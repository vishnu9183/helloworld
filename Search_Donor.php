<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php");?>
</head>
<body>
    
   
<?php
include("top_nav.php");
?>

    <!-- Page Content -->
    <div class="container-fluid"  style='margin-top:70px;'>
        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
			 <h3 class=" text-primary">
					<i class='fa fa-search'></i>   Search Donor Avalibility
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
			{ $con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
                  mysqli_select_db ($con,'logindb');
		         @$stype=$_POST['STYPE'];
				 @$bloodgroup=$_POST['BLOODGROUP'];
				 @$st=$_POST['ST'];
			
				 
				  if($stype=="PINCODE")
					  $query="select * from donor where pincode='$st' and bloodgroup='$bloodgroup'";
				  else if ($stype=="CITY")
					  $query="select * from donor where city='$st' and bloodgroup='$bloodgroup'";
				  else if ($stype=="STATE")
					  $query="select * from donor where state='$st' and bloodgroup='$bloodgroup'";
				  //echo $query;
			        	$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				$num_rows = mysqli_num_rows($query_run);
				            if($num_rows>0)
					      {
						
							
							
								while($row=mysqli_fetch_assoc($query_run))
								{
									
									
								
									
								echo "<tr><td>".$row["username"]."</td><td>".$row["bloodgroup"]."</td><td>".$row["contact1"]."</td><td>".$row["contact2"]."</td><td>".$row["email"]."</td></tr>";
								
								}
								echo "</table>";
					
				             	}
					
								
							else
							{
									echo '<script type="text/javascript">alert("SORRY NO DONOR FOUND WITH THE REQUESTED BLOOD GROUP")</script>';
							}
			
							
						
			}
			
			
			?>
						
       
		  
		  		<div class="row  centered-form ">
		    <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center" style="padding:5px;font-size:16px;font-weight:bold"><span class="fa fa-search "> </span>  Search Donor Avalibility</h3>
                    </div>
                    <div class="panel-body">
				<form autocomplete="on" method="post"  action="Search_Donor.php" enctype="multipart/form-data">
						<div class="form-group">
							<label class="control-label text-primary">Search Type</label>
								<select name="STYPE"  id="STYPE" required class="form-control input-sm">
									<option value="PINCODE">Pincode</option>
									<option value="CITY">City</option>
									<option value="STATE">State</option>
								</select>
						</div>
						<div class="form-group">
							<label class="control-label text-primary">Required Blood Group</label>
								<select name="BLOODGROUP" id="BLOOD" required  class="form-control input-sm">
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
							<label class="control-label text-primary">Search Text</label>
							<input type="text" name="ST" id="str" required placeholder="Type Here" class="form-control input-sm">
						</div>
						
						 <div class="form-group">
							<button class="btn btn-primary" name="SUBMIT" type="submit" id="submit"><i class='fa fa-search'></i> Search Donor</button>
						  </div>
						
                    </div>
                </div>
			
            </div>
			 <div class="col-xs-12 col-sm-12 col-md-6" id="feedback">
			 <p>
				Please fill the correct details and search your nearest donor.For more queries contact our admin.
			 </p>
			  </div>
			
			
			
            </div>
		  
           </div>
   	</form>
	
	
</body>
</html>