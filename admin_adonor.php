<?php
session_start();
include("config.php");
include("admin_function.php");
 if(!isset($_SESSION['usertype']))
 {
	 header("location:admin.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
			<?php include("admin_head.php");?>
	
	</head>
	<body>

<?php include("admin_topnav.php"); ?>
<div class="container" style='margin-top:70px'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<h3 class="text-success"><i class="fa fa-users"></i> Active Donor Details </h3><hr>    
		<div class="row">
		<table style="width:100%; color:red; font-family:monospace; font-size:25px; text-align:left;">
	<tr>
	<th>USERNAME</th>
	<th>BLOODGROUP</th>
	<th>CONTACT</th>
</tr>
               <?php
			
			 $con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
                  mysqli_select_db ($con,'logindb');
		       
				 
					  $query="select * from donor ";
				  //echo $query;
			        	$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				            if($query_run)
					      {
						
							
							
								while($row=mysqli_fetch_assoc($query_run))
								{
									
									
								
									
								echo "<tr><td>".$row["username"]."</td><td>".$row["bloodgroup"]."</td><td>".$row["contact1"]."</td></tr>";
								
								}
								echo "</table>";
					
				             	}
					
								
							else
							{
								echo '<p class="bg-danger msg-block">NO DONOR FOUND /p>';
							}
			
							
						
			
			
			
			?>
		<div class='col-md-12'>
			<div class='table-responsive' id="feedback">
			
			
			
			<div>
		</div>
		
		
	</div>
		
		
		</div>
	</div>
</div>

  
  
	 <?php include("admin_footer.php"); ?>
 

	</body>
</html>