
<?php 
$con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
                  mysqli_select_db ($con,'logindb');
$sql="SELECT * FROM messages WHERE STATUS=1";
$query_run = mysqli_query($con,$sql);
if($query_run)
{
	$mes='<span class="badge pull-right">'.$n.' Unread</span>';
}
else
{
	$mes="";
}
?>
<h3 class="text-primary"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</h3>
<hr>

<ul class="nav nav-stacked">
	<li><a href="admin_inbox.php"><i class="fa fa-envelope fa-lg"></i> Inbox <?php echo $mes;?></a></li>
	<li><a href="admin_adonor.php"><i class="fa fa-users fa-lg text-success"></i> Active Donors</a></li>
	<li><a href="admin_ndonor.php"><i class="fa fa-users fa-lg text-danger"></i> Not Active Donors</a></li>
	<li><a href="admin_need_blood.php"><i class="fa fa-bed fa-lg"></i> Need Blood</a></li>
	<hr>
	<li><a href="#add" data-toggle="collapse" ><i class="fa fa-cogs fa-lg"></i> Settings</a></li>
	<ul class="nav collapse" id="add">
		<li><a href="admin_country.php"><i class="fa fa-plus fa-lg"></i> Add donor</a
		<li><a href="admin_state.php"><i class="fa fa-plus fa-lg"></i> Delete donor </a>
	
		</li>
	</ul>
</ul>

<hr>