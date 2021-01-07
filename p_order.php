<?php
include 'session.php';
?>
<form method="post">
		<h1 style="color:green"><center>Patient Orders Detail</center></h1>
            <div class="pull-left">
        <a href="patient_dash.php">     <input type="button" class="btn btn-default btn-md" style="box-shadow:0px 0px 1px 1px green;color:green" value="BACK">
 </a> </div>
		<hr class="" style="float:left;width:1250px">
<div class="container"> 
<center> <br> <br>
             <table>
             	
				<tr>
					<th>ID </th>
					<th> Order </th>  
					<th>Hotel Name </th>
					<th> Food</th>
					<th >Status  </th>
				</tr>

<?php
$conn=new mysqli("localhost","root","","online");
$id=$_SESSION['id'];
	$sql="select * from request where pid='$id'";

//$sql="select * from orders";
$result=$conn->query($sql);
 
 if($result->num_rows>0)
 {

 while($row=$result->fetch_array()){
 $id= $row["id"];
 	echo "<tr> <td>".$row['id']."</td>";
 echo "<td>".$row["myselect"]."</td>";
 echo "<td>".$row["hotel"]."</td>";
 echo "<td>".$row["food"]."</td>";
 echo "<td>"."<a href='f_delete.php?id=$id' onclick='return checkdelete()'>";
 echo "<input type='button' class='btn btn-default' value='cancel' style='color:red'></a> </td>";
  	}
}
else
{
	echo "No Orders";
}
?>
</table>
<script>
  function checkdelete()
  {
    return confirm('Are you sure you want to cancel this order???');
  }

</script>

</form>
</div>
</body>
</html>
