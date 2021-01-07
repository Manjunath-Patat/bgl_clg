 <?php
include 'session.php';
?>
 <form method="post">
	<div class="container">
		<h1 style="color:green"><center>Hospital Staff Details</center></h1>
            
<div class="pull-left">                            
         <a href="a_hospital.php"> <input type="button" class="btn btn-default btn-md" value="Back" name="reset" style="box-shadow:0px 0px 0px 1px blue;color:red;border-radius:5px"> 
     </a>
</div>

<center> <br> <br>
          
    <table>
				<tr>
					<th >ID </th>
					<th >Staff Name </th>
					<th >Address</th> 
					<th > Mobile</th>
					<th >Email</th>
					<th >Password </th>  
					<th >Action  </th>
				</tr>

<?php
$conn=mysqli_connect("localhost","root","","online");
{ 
  $sql="select * from hospital";
  $result=$conn->query($sql);
   
 if($result->num_rows>0)
 {

 while($row=$result->fetch_array()){
 $id= $row["id"];
 echo "<tr><td>".$row["id"]."</td>
  <td>".$row["name"]."</td>
  <td>".$row["address"]."</td>
 <td>".$row["mobile"]."</td>
  <td>".$row["email"]."</td>
  <td>".$row["password"]."</td>
  <td> <a href='h_update.php?id=$id'> <input type='button' class='btn btn-default' value=' Edit' style='box-shadow:0px 0px 1px 1px blue'></a>&nbsp;
  <a href='h_delete.php?id=$id' onclick='return checkdelete()'><input type='button' class='btn btn-default' value=' Delete' style='box-shadow:0px 0px 1px 1px red'>
 </a></td>";
}
echo "</table>";

}

else{
  echo"NO customer";
}
 }
$conn->close();
?>
</table>
<script>
  function checkdelete()
  {
    return confirm('Are you sure you want to delete this data???');
  }

</script>

</form>
</div>
</body>
</html>