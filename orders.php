<?php
include 'session.php';
?>
 <form method="post">
		<h1 style="color:green"><center>Orders Detail</center></h1>
            <div class="pull-left">
           <a href="resturant_dash.php"> <input type="button" class="btn btn-default btn-md" style="box-shadow:0px 0px 1px 1px green;color:green" value="Back">
      </a>  </div>
<hr class="" style="float:left;width:1250px" >
     <div class="container"> 
<center> <br> <br>
          
    <table>
				<tr>
					
					<th > PID </th>
					<th> Order </th>  
					<th>Hotel Name </th>
					<th> Food</th>
					<th >Patient Name </th>
					<th >Room</th> 
					<th > Mobile</th>

					
					<th >Status  </th>
				</tr>

<?php
$conn=new mysqli("localhost","root","","online");
	$sql="select * from request";

//$sql="select * from orders";
$result=$conn->query($sql);
 
 if($result->num_rows>0)
 {

 while($row=$result->fetch_array()){
 $id= $row["pid"];
 echo "<tr><td>".$row["pid"]."</td>";
 echo "<td>".$row["myselect"]."</td>";
 echo "<td>".$row["hotel"]."</td>";
 echo "<td>".$row["food"]."</td>";
 
  $q="SELECT * FROM patient where id='$id'";
  $res=$conn->query($q);
  if ($res->num_rows>0) {
  	while ($row=$res->fetch_array()) {
  		echo "<td>".$row["fname"];
  		echo "&nbsp;".$row["lname"]."</td>";
  		echo "<td>".$row["room"]."</td>";
  		echo "<td>".$row["mobile"]."</td>";
  		echo "<td>".'<input type=submit name=status class=btn btn-sm value=delivery style=color:blue>'."</td>";
  	}
  }
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
    return confirm('Are you sure you want to delete this data???');
  }

</script>

</form>
</div>
</body>
</html>
