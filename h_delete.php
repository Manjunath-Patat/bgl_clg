<?php
$conn=new mysqli ("localhost","root","","online");
$id=$_GET['id'];
$qry="delete from hospital where id='$id'";
$result=$conn->query($qry);
    if($result==true){
      ?>
      <META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/new/h_edit.php"> 
      <?php

    }else{
      echo"<script>alert('failed..................')</script>";
    exit();

        }
?>