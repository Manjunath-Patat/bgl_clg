<?php
ob_start();
ob_clean();
include 'session.php';
$conn=new mysqli("localhost","root","","online");
if (isset($_GET['id'])) {
	$id=$_GET['id'];

	$qry="select * from hospital where id='$id'";
	$result=$conn->query($qry);
 
 if($result->num_rows > 0){

 while($row=$result->fetch_array()){
 $id= $row["id"];
 $name=$row["name"];
 $address=$row["address"];
 $mobile=$row["mobile"];
 $email=$row["email"];
 $password=$row["password"];
}
}
}
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
	<div class="container">
	<form method="POST">
<BR>
		<div class="pull-left">
		<a href="h_edit.php">  <input type="button" class="btn btn-default btn-md" style="box-shadow:0px 0px 1px 1PX green;color:green" value="Back">
	 </a></div>
    <div class="col-md-4">
	</div>

	<div class="col-md-5">				 
 
			<h2 style="color:blue"> <center> Edit Staff Data</center>  </h2>  <br>
			 
			 	<div style="height:20% width:50%; padding:50px; border-radius:15px;box-shadow:0px 0px 1px 1PX  black " class="form-group">
                  <div class="form-group text-center">
                  <div class="row"> 
                  <div class="col-md-4"> 
			 	<label>Name: </label> 
			 	</div>
			 	<div class="col-md-8">
			 	<input type="text" name="name" id="First name" value="<?php echo($name);?>" placeholder="First Name" class="form-control" style="box-shadow:0px 0px 1px 1px">
			 <br>
			 </div>
			</div>
			 		<div class="row">
			 		<div class="col-md-4">
			 	<label>Address: </label>
			 </div>
			 <div class="col-md-8">
			 	<input type="text" name="address" value="<?php echo($address);?>" placeholder="Enter Address" class="form-control" style="box-shadow:0px 0px 1px 1px">
			 	<br>
			 </div>
			</div>
		    <div class="row">
		    	<div class="col-md-4">
			 	<label>mobile no: </label> 
			 </div>
			 <DIV class="col-md-8">
			 	<input type="text" name="mobile" value="<?php echo($mobile);?>" placeholder="Enter mobile no" class="form-control"style="box-shadow:0px 0px 1px 1px" >
			 	<br>
			 </DIV>
			</div>

					    <div class="row">
		    	<div class="col-md-4">
			 	<label>Email: </label> 
			 </div>
			 <DIV class="col-md-8">
			 	<input type="text" name="email" value="<?php echo($email);?>" placeholder="Enter mobile no" class="form-control" style="box-shadow:0px 0px 1px 1px">
			 	<br>
			 </DIV>
			</div>

			 	<div class="row">
			 		<div class="col-md-4">
			 	<label>Password: </label> 
			 </div>
			 <div class="col-md-8">
			 	<input type="text" name="password" placeholder="Enter your password" value="<?php echo($password);?>" class="form-control" style="box-shadow:0px 0px 1px 1px">
			 	<br>
			 </div>
			</div>
			  <button type="submit" class="btn btn- btn-md" style="box-shadow:0px 0px 1px 1px black;color:green"  value="update" name="update"> update</button> 
			 	      
		    </div>
		</div>
</div>
</div>
</form>

<?php
if (isset($_POST['update'])) {
	$name=$_POST['name'];
	$address=$_POST['address'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	if(empty($name&&$address&&$mobile&&$email&&$password))
	{
		echo"<script>alert('enter all values')</script>";
		exit();
	}

	else
	{
		$query="UPDATE hospital SET name='$name',address='$address',mobile='$mobile',email='$email',password='$password' WHERE id=$id";
		$result=$conn->query($query);
		if($result==true){
			echo"<script>alert('data updated successfully')</script>";
			header('Refresh:0');
		exit();

		}else{
			echo"<script>alert('failed..................')</script>";
		exit();

				}
	}

}
?>