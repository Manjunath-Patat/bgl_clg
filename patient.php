<?php
ob_start();
ob_clean();
include 'session.php';
?>
  <form method="post">
		<h1 style="color:green"><center>Patient's Details</center></h1>
      
      
<div class="header-nav">
        <nav class="navbar navbar-info">
           
      <div class="pull-left">
         <a href="hospital_dash.php">   <input type="button" class="btn btn-default btn-md" style="box-shadow:0px 0px 1px 1px green;color:green" value="Back">
 </a> </div>
                  </div>
                  </nav>
                  <center>
          
    <table>
				<tr>
					<th >ID </th>
					<th >FName </th>
					<th >Lname</th> 
          <th> Disease </th>
					<th > Address</th>
					<th >Mobile</th>
					<th >Emr Contact </th> 
           <th >Room NO: </th>
          <th >Payble </th>  
          <th >Insurance </th>
          <th >password</th>      
					<th >Action  </th>
				</tr>

<?php
$conn=mysqli_connect("localhost","root","","online");
  $sql="select * from patient" ;
  $result=$conn->query($sql);
   
 if($result->num_rows>0)
 {

 while($row=$result->fetch_array()){
 $id= $row["id"];
 echo "<tr><td>".$row["id"]."</td>
  <td>".$row["fname"]."</td>
  <td>".$row["lname"]."</td>
  <td>".$row["disease"]."</td>
  <td>".$row["address"]."</td>
 <td>".$row["mobile"]."</td>
  <td>".$row["emobile"]."</td>
  <td>".$row["room"]."</td>
  <td>".$row["payble"]."</td>
  <td>".$row["insurance"]."</td>
  <td>".$row["password"]."</td>
    <td> <a href='pupdate.php?id=$id'><input type='button' class='btn btn-sm' style='box-shadow:0px 0px 1px 1px blue' value='Edit'></a>&nbsp;
  <a href='pdelete.php?id=$id' onclick='return checkdelete()'><input type='button' class='btn btn-sm' style='box-shadow:0px 0px 1px 1px red' value='Delete'>
  </a></td>";
}
echo "</table>";

}

else{
  echo"NO Patient's";
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