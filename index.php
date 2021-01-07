<?php
include 'session.php';
?>
	<br> <b>
		<h1 style="color:darkblue">
		ONLINE SERVICE </h1>  </b>
		<br>
		<div style="box-shadow:0px 0px 2px 2px green; border-radius:5px;background-color:;" class="form-group">

			<div class="header-nav">
				<nav class="navbar navbar-success">
					<div class="pull-left">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button></div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-12">
							<ul class="nav navbar-nav w3_agile_nav">
								<li><a href="#"><span>About Us</span></a></li>
								<li><a href="#"><span>Gallery</span></a></li>
								<li><a class="agile-icon" data-toggle="modal" data-target="#login"><span>Admin</span></a></li>
								<li><a href="resturant_admin.php"><span> Resturant</span> </a>
								</li>
								<li>
									<a href="hospital_login.php" ><span>Hospital</span> </a>
								</li>
								<li><a href="patient_login.php"><span>Deity</span></a></li>								
							</ul>
							
						</nav>
					</div>							
						</nav>
					</div>
				</nav>
			</div>
		</div>
			<div class="clearfix"> </div>
		</div>
	</div>

<div class="container">
<img src="img/ee.jpg" height="570px;width:5000px" style="border-radius:15px"> 

<div class="modal about-modal w3-agileits fade" id="login" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div> 
			
			<div class="modal-body" style="background-color:lightgray;color:deeppink">

			<center><h2 style="color:darkorange"> ADMIN LOGIN </h2></center>
			<form method="post">
			<b><h4>	Username</b>
					<input type="text" name="email" class="form-control" style="box-shadow: 0px 0px 0px 1px black" placeholder="Enter Your Email" required=""/>
					<br>
			<b>	Password </b>
					<input type="password" name="password" class="form-control" style="box-shadow: 0px 0px 0px 1px black" placeholder="Enter Your Password" required=""/> </h4>
					<br>
					<div class="pull-right">
					<input type="submit" name="admin" class="btn btn-md" style="border-radius:5px;box-shadow:0px 0px 1px 1px red;color:blue"  value="Login">
					</div>
					<br>
					<br>
			</form>
			</div> 
		</div>
	</div>
</div>



</body>
</html>
<?php
$conn=new mysqli("localhost","root","","online");
if (isset($_POST['admin'])) {
$email=$_POST["email"];
$password=$_POST["password"]; 
if(empty($email&&$password))
    {
        echo"<script>alert('enter all values')</script>";
        exit();
   }
   else
   {
    $query="select * from admin where email='$email' AND password='$password'";
$result=$conn->query($query);
   $row=$result->fetch_array();
 
 if($row['email']==$email && $row['password']==$password)
        {
        echo "<script>window.location = 'admin.php';</script>";
    }
else
    {
        echo"<script>alert('INAVALID USER')</script>";
        exit();
   }

}
}
?>
