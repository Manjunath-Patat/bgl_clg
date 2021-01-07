<?php
ob_start();
ob_clean();
include 'session.php';

$conn=new mysqli("localhost","root","","online");
if (isset($_GET['id'])) {
	$id=$_GET['id'];

	$qry="select * from patient where id='$id'";
	$result=$conn->query($qry);
 
 if($result->num_rows > 0){

 while($row=$result->fetch_array()){
 $id= $row["id"];
 $fname=$row["fname"];
  $lname=$row["lname"];
  $disease=$row["disease"];
 $address=$row["address"];
 $mobile=$row["mobile"];
 $emobile=$row["emobile"];
  $room=$row["room"];
   $payble=$row["payble"];
    $insurance=$row["insurance"];
 $password=$row["password"];
}
}
}
 ?>
	<form method="post">
	<br>	<div class="pull-left">
		<a href="patient.php">	 <input type="button" class="btn btn-default btn-md" style="box-shadow:0px 0px 1px 1px green;color:green" value="back"> </a>
	
 </div>
    <div class="col-md-4">
	</div>

	<div class="col-md-5">			 
		     
			<h2 style="color:navy"> <center> Edit Patient Data</center>  </h2>  <br>
			 
			 	<div style="padding:25px; border-radius:10px;box-shadow:0px 0px 1px 1PX  black " class="form-group">
                  <div class="form-group text-center">
                  <div class="row"> 
                  <div class="col-md-4"> 
			 	<label>fname: </label> 
			 	</div>
			 	<div class="col-md-8">
			 	<input type="text" name="fname" id="First name" value="<?php echo($fname);?>" placeholder="First Name" class="form-control" style="box-shadow:0px 0px 1px 1px">
			 <br>
			 </div>
			</div>
					   <div class="row"> 
                  <div class="col-md-4"> 
			 	<label>Lname: </label> 
			 	</div>
			 	<div class="col-md-8">
			 	<input type="text" name="lname" id="First name" value="<?php echo($lname);?>" placeholder="First Name" class="form-control" style="box-shadow:0px 0px 1px 1px">
			 <br>
			 </div>
			</div>
	
	
					   <div class="row"> 
                  <div class="col-md-4"> 
			 	<label>Disease: </label> 
			 	</div>
			 	<div class="col-md-8">
			 	<input type="text" name="disease" id="First name" value="<?php echo($disease);?>" placeholder="First Name" class="form-control" style="box-shadow:0px 0px 1px 1px">
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
			 	<label>Emg no: </label> 
			 </div>
			 <DIV class="col-md-8">
			 	<input type="text" name="emobile" value="<?php echo($emobile);?>" placeholder="Enter mobile no" class="form-control" style="box-shadow:0px 0px 1px 1px">
			 	<br>
			 </DIV>
			</div>


				   <div class="row"> 
                  <div class="col-md-4"> 
			 	<label>Room: </label> 
			 	</div>
			 	<div class="col-md-8">
			 	<input type="text" name="room" id="First name" value="<?php echo($room);?>" placeholder="First Name" class="form-control" style="box-shadow:0px 0px 1px 1px">
			 <br>
			 </div>
			</div>

			   <div class="row"> 
                  <div class="col-md-4"> 
			 	<label>Payble: </label> 
			 	</div>
			 	<div class="col-md-8">
			 	<input type="text" name="payble" id="First name" value="<?php echo($payble);?>" placeholder="First Name" class="form-control" style="box-shadow:0px 0px 1px 1px">
			 <br>
			 </div>
			</div>

			   <div class="row"> 
                  <div class="col-md-4"> 
			 	<label>Insuarance: </label> 
			 	</div>
			 	<div class="col-md-8">
			 	<input type="text" name="insurance" id="First name" value="<?php echo($insurance);?>" placeholder="First Name" class="form-control" style="box-shadow:0px 0px 1px 1px">
			 <br>
			 </div>
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
	$fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $disease=$_POST['disease'];
 $address=$_POST['address'];
 $mobile=$_POST['mobile'];
 $emobile=$_POST['emobile'];
  $room=$_POST['room'];
   $payble=$_POST['payble'];
    $insurance=$_POST['insurance'];
 $password=$_POST['password'];
	if(empty($fname&&$lname&&$disease&&$address&&$mobile&&$emobile&&$room&&$payble&&$insurance&&$password))
	{
		echo"<script>alert('enter all values')</script>";
		exit();
	}

	else
	{
		$query="UPDATE patient SET fname='$fname',lname='$lname',disease='$disease',address='$address',mobile='$mobile',emobile='$emobile',room='$room',payble='$payble',insurance='$insurance',password='$password' WHERE id=$id";
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



