<?php
session_start();
session_destroy();
header("location:resturant_admin.php");
?>