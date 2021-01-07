<?php
ob_start();
ob_clean(); 
include 'session.php';

?>
  <style>
  	body
  	{
  		background-image:url("img/dc (3).jpg");
  		background-repeat:no-repeat;
  	}
  </style>
</head>
<body>
	<form method="post">
	<div class="container">
     <br>
    <a href="index.php">
    <input type="button" value="home" class="btn btn-sm" style="color:green"></a>
  

		<h1 style="font-family:MS Serif;color:darkblue"> <center>RESTURANT OWNER SIGN IN PAGE</center> </h1>
		<BR>
		<div class="col-md-4"> </div>
<div class="col-md-5">
		<div style="box-shadow:0px 0px 1px 2px green;padding:5px; border-radius:25px">
		<center> <h3 style="font-family:Comic Sans MS"><u> Sign in </u> </h3></center> 
		<h4>
		User ID:
		<input type="text" name="email1" placeholder="Enter your email" class="form-control">
		<br>
		Password:
		<input type="password" name="password1" placeholder="Enter your password" class="form-control">
		<br>
		<br>
		<center>
		<button type="submit" value="login" name="signin" class="btn btn-md" style="box-shadow:0px 0px 1px 2px blue;color:blue;border-radius:5px"> <b> Login </b> </button> &nbsp; &nbsp;

		<button type="reset" name="reset" class="btn btn-default btn-md" value="reset" style="box-shadow:0px 0px 1px 2px red;color:red;border-radius:5px"><b> Reset  </b> </button>

</center>
</h4>
</div>
</div></div>
</div>
</form>
</body>
</html>

<?php
$conn=new mysqli("localhost","root","","online");
if (isset($_POST["signin"])) {
$email=$_POST['email1'];
$password=$_POST['password1']; 
if(empty($email&&$password))
    {
        echo"<script>alert('enter all values')</script>";
        exit();
   }
   else
   {
    $query="select * from resturant_owner where email='$email' AND password='$password'";
$result=$conn->query($query);
   $row=$result->fetch_array();
  if($row['email']==$email && $row['password']==$password)
        {
        	$_SESSION['id']=$row['id'];
        //header('location:resturant_dash.php');
        echo "<script>window.location ='resturant_dash.php' </script>";
        }
else
    {
        echo"<script>alert('INAVALID USER')</script>";
        exit();
   }

}
}
?>


