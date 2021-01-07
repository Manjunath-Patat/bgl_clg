<?php
$conn=new mysqli ("localhost","root","","online");
$id=$_GET['id'];
$qry="delete from resturant_owner where id='$id'";
$result=$conn->query($qry);
    if($result==true){
      ?>
      <META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/new/r_owneredit.php"> 
      <?php

    }else{
      echo"<script>alert('failed..................')</script>";
    exit();

        }
?>