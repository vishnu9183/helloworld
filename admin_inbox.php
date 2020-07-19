<?php
session_start();
include("config.php");
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
<div class="container"  style='margin-top:70px;'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			
			
 <table style="width:100%; color:red; font-family:monospace; font-size:25px; text-align:left;">
	<tr>
	<th>USERNAME</th>
	<th>NUMNBER</th>
	<th>CONTACT</th>
	<th>MESSAGE</th>
</tr>
<?php
$con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
      mysqli_select_db ($con,'logindb');
       $query="select * from message";
				  //echo $query;
			        	$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				            if($query_run)
					      {
						
							
							
								while($row=mysqli_fetch_assoc($query_run))
								{
									
									
								
									
								echo "<tr><td>".$row["username"]."</td><td>".$row["number"]."</td><td>".$row["email"]."</td><td>".$row["text"]."</td></tr>";
								
								}
								echo "</table>";
					
				             	}
					
								
							else
							{
								echo '<p class="bg-danger msg-block">NO MESSAGES FOUND</p>';
							}
			
							
						
			
			
					
					
					?>
		
		</div>
	</div>
</div>
	 <?php include("admin_footer.php"); ?>
	</body>
</html>