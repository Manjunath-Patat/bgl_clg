<?php
include 'session.php';
?>
<div class="container">
	<form method="post">
	<br>

		<button type="submit" name="" class="btn btn-sm" style="color: blue;box-shadow:0px 0px 0px 1px orange">	<a href="resturant_dash.php">Back	</a> </button>		
	<center>
	<h2 style="color:F617D8">ADD FOOD </h2></center>
	<BR>
	<div class="col-md-4">
	</div>
	<div class="col-md-4">
		<div style="box-shadow:0px 0px 0px 2px lightcoral;padding:7px;border-radius:10px">
			Diet Plan:
			<select id="diet" name="name" class="form-control">
			<option> </option>	
			<option>Sugar</option>
			<option>Astama</option>
			<option>food poisen</option>
			<option></option>
			<option></option>
			</select> 	
			<br>
			Food Name:
			<input type="text" name="food" class="form-control" placeholder="Food name">
			<br>
			Image:
			<input type="file" name="img" accept="image/*">
			<br>
			Price:
			<input type="text" name="price" class="form-control" placeholder="Price of food">
			<br>
			<br>
			<center>
				<input type="submit" name="add" value="Food Add" class="btn btn-sm" style="color: blue;box-shadow:0px 0px 0px 1px green"> &nbsp; &nbsp;
				<input type="reset" name="reset" value="Reset"class="btn btn-sm" style="color: red;box-shadow:0px 0px 0px 1px red" >
			</center>
			<br>
		</div>
	</div>
</form>

<?php
$conn=new mysqli("localhost","root","","online");
if (isset($_POST['add']))
{
$name=$_POST['name'];
$food=$_POST['food'];
$img=$_POST['img'];
$price=$_POST['price'];
if (empty($name&&$food&&$img&&$price))
{
	echo "<script>alert('fill all details')</script>";
	exit();
}
else	
{
$sql="insert into food(name,food,img,price)values('$name','$food',
		'$img','$price')";
		$result=$conn->query($sql);
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
