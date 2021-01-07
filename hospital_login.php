<?php
include 'session.php';
?>
  <style>
  	body 
  	{ 
  		background-size:1400px 600px; 
  		background-image:url('img/he.jpg');
  		background-repeat: no-repeat;
  	}
  h5 {
  	font-size:15px;
  	color:blue;
  }	
  </style>
</head>
<body style="background-color:lightgray">
	<form method="post">

    <div class="container">
      <br>
    <a href="index.php">
    <input type="button" value="home" class="btn btn-sm" style="color:green"></a>
  
  <center>
   <h2 style="font-family:javanese Text;font-size:35px"> HOSPITAL LOGIN PAGE </h2> </center>
		<div class="col-md-4">
		</div>
			<div class="col-md-4">
				<br><br><br><br>
					<div style="border-radius:5px;box-shadow:0px 0px 1px 3px green;padding:10px" > <h5> <b> <b> 
						Email Id:
						<input type="text" name="email" placeholder="Enter Your Email ID" class="form-control" style="box-shadow: 0px 0px 1px 1px">
						<br>
						Password:
						<input type="password" name="password" placeholder="Enter Your Password" class="form-control" style="box-shadow: 0px 0px 1px 1px"></b></h5> <br><center>
						<input type="submit" name="submit" value="Login" class="btn btn-md" style="box-shadow: 0px 0px 1px 2px blue;color:blue;border-radius:4px"> &nbsp;&nbsp;
						<input type="submit" name="reset" value="Reset" class="btn btn-md" style="box-shadow: 0px 0px 1px 2px red;color:red;border-radius:4px">	</center> <br></b> </h5>
					</div>
				</div>
			</div>
		</center>
	</form>
	</body>
	</html>





<?php
$conn=new mysqli("localhost","root","","online");
if (isset($_POST["submit"])) {
$email=$_POST['email'];
$password=$_POST['password']; 
if(empty($email&&$password))
    {
        echo"<script>alert('enter all values')</script>";
        exit();
   }
   else
   {
    $query="select * from hospital where email='$email' AND password='$password'";
$result=$conn->query($query);
   $row=$result->fetch_array();
 //  session_start();
 if($row['email']==$email && $row['password']==$password)
        {
          $_SESSION['id']=$row['id'];
        //header("location:resturant_dash.php?id='$id'");
        echo "<script>window.location ='hospital_dash.php';</script>";
        }
else
    {
        echo"<script>alert('INAVALID USER')</script>";
        exit();
   }

}
}
?>

