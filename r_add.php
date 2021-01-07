<?php
include 'session.php';
?>
	<form method="post">
	<div class="container"> <br>
<div class="pull-left">
<a href="a_resturant.php">     <input type="button" class="btn btn-default btn-md" style="box-shadow:0px 0px 1px 1px green;color:green" value="BACK">
 </a> </div>		
		<div class="col-md-4">
		</div>
		<div class="col-md-5">
			<h2 style="font-family:MS Serif;color:darkblue"> <center>RESTURANT OWNER ADD
		</center> </h2>
		<BR>

			<div style="box-shadow:0px 0px 1px 2px red;padding:5px; border-radius:10px">
			<center> <h3 style="font-family:Comic Sans MS"> <u> Sign up  </u></h3>
			</center> 
			<h4>
			Name:
			<input type="text" name="name" placeholder="Enter your name" class="form-control">
		<br>
			Address:
			<input type="text" name="address" placeholder="Enter your address" class="form-control">
		<br>
		Resturant Name:
			<select name="rname" class="form-control">
<option value="">select</option>	
<option value="B">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
</select>
		<br>
			Mobile:
			<input type="text" name="mobile" placeholder="Enter your mobile" class="form-control">
		<br>
			Email:
			<input type="email" name="email" placeholder="Enter your email" class="form-control">
		<br>
			Password:
			<input type="password" name="password" placeholder="Enter your password" class="form-control">
		<br>
		<br>
		<center>
			<button type="submit" class="btn btn-default btn-md" name="submit"  style="box-shadow:0px 0px 0px 1px red;color:green;border-radius:5px"><b> submit 	</b> </button> 
			 	      	         	 &nbsp;&nbsp;
		     <button type="reset" class="btn btn-default btn-md" value="reset" name="reset" style="box-shadow:0px 0px 0px 1px red;color:red;border-radius:5px"><b> reset </b>   </button> 	      	         	 
		    

</center>
</h4>
</div>
</form>

<?php
$conn=new mysqli("localhost","root","","online");
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$address=$_POST['address'];
	$rname=$_POST['rname'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	if(empty($name&&$address&&$rname&&$mobile&&$email&&$password))
	{
		echo"<script>alert('enter all values')</script>";
		exit();
	}

	else
	{
		$query="insert into resturant_owner(name,address,rname,mobile,email,password)values('$name','$address','$rname',
		'$mobile','$email','$password')";
		$result=$conn->query($query);
		if($result==true){
		echo "<script>alert('successfull') </script>";
		}
		else
		{
			echo"<script>alert('failed..................')</script>";
		exit();
					}
	}

}
?>



