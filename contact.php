<?php include"config.php";?>
<!DOCTYPE html>
<html lang="en">
<?php include"head.php";?>
<body>

<?php
	 include"top_nav.php";
?>
	
    <!-- Page Content -->
    <div class="container" style="margin-top:70px;">

			<div class="row">
				<div class="col-md-8">
				<?php
					if(isset($_POST["submit"]))
					{             $con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
                                mysqli_select_db ($con,'logindb');
								@$username=$_POST['USERNAME'];
								@$number=$_POST['NUMBER'];
								@$email=$_POST['EMAIL'];
                               @$text=$_POST['MESSAGE'];
							   
							   $query = "insert into  message values('$username','$number','$email','$text')";
							   $query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				//echo $query;
				if($query_run)
					{
						
							
								echo '<script type="text/javascript">alert("MESSAGE SENT")</script>';
								
							}
							else
							{
								echo '<p class="bg-danger msg-block">Attempt Unsuccessful due to server error. Please try later</p>';
							}
						
					}
					
				?>
		
				<h3 class='text-primary'>Send us a Message</h3>
                <form method="post" action="contact.php" role="form" >
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" name="USERNAME" required>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" name="NUMBER" required>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="EMAIL"  >
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="5" cols="100" class="form-control" name="MESSAGE" required maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary" name="submit"><i class='fa fa-send'></i> Send Message</button>
                </form>
				
			</div>
			
            <div class="col-md-4">
                <h3 class='text-primary'>Contact Details</h3>
                <p>
                    Geethanjali Blood Bank, <br>Geethanjali College of Engineering and Technology, <br>
					Cheeryal Village,<br>
					Keesara-501301.<br>
					Medchal Dt.
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: 8919424818</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="#" >Geethanjalibloodbank@gmail.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: 24*7</p>
				<p><i class="fa fa-globe"></i> 
                    <abbr title="Website">W</abbr>: <a href="index.php">www.Geethanjalibloodbank.org</a></p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>


        <hr>
		<?php include"footer.php"; ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

   

</body>

</html>
