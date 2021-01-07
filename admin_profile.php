<?php
ob_start();
ob_clean();
include 'session.php';
$conn=new mysqli("localhost","root","","online");
 {
 	$qry="select * from admin ";
	$result=$conn->query($qry);
 
 if($result->num_rows > 0){

 while($row=$result->fetch_array()){
 $id= $row["id"];
 $name=$row["name"];
 $address=$row["address"];
 $email=$row["email"];
 $mobile=$row["mobile"];
 $password=$row["password"];
}
}
}
 ?>
 	<form method="POST">
    <div class="col-md-4">
	</div>

	<div class="col-md-5">
		<h1 style="color:darkblue"> <center>Admin Profile </center></h1> <br>
				<div style="height:20% width:50%; padding:50px; border-radius:15px;box-shadow:0px 0px 1px 1PX  black " class="form-group"> <b>
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
			 	<label>email: </label>
			 </div>
			 <div class="col-md-8">
			 	<input type="text" name="email" value="<?php echo($email);?>" placeholder="Enter landmark" class="form-control" style="box-shadow:0px 0px 1px 1px">
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
			 	<label>Password: </label> 
			 </div>
			 <DIV class="col-md-8">
			 	<input type="text" name="password" value="<?php echo($password);?>" placeholder="Enter mobile no" class="form-control" style="box-shadow:0px 0px 1px 1px">
			 	<br>
			</b> </DIV>
			</div>

			  <button type="submit" class="btn btn- btn-md" style="box-shadow:0px 0px 1px 1px black;color:green"  value="update" name="update"> update</button> &nbsp; &nbsp; 
		<a href="admin.php">
			 <input type="button" class="btn btn- btn-md" style="box-shadow:0px 0px 1px 1px black;color:red" value="Back" name="back"> </a>

		    </div>
		</div>
	
</div>
</div>
</form>

<?php
if (isset($_POST['update'])) {
	$name=$_POST['name'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
	
	if(empty($name&&$address&&$email&&$mobile&&$password))
	{
		echo"<script>alert('enter all values')</script>";
		exit();
	}

	else
	{
		$query="UPDATE admin SET name='$name',address='$address',email='$email',mobile='$mobile',password='$password' WHERE id=$id";
		//$query="update into data(name,address,mobile,a_mobile,pincode)values('$name','$address','$mobile','$a_mobile','$pincode')";
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