<?php
session_start();
?>
<html>
<head>
<title> bagalkot polytechnic</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript --> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
	span
	{ font-size:20px;
		color:mediumblue;

	}
	h1{
		font-size:40px;
		font-family:javanese Text;  
	}
	body
	{
		background-color:lightgray;
	}


span
	{ font-size:20px;
		color:mediumblue;

	}
	h1{
		font-size:40px;
		font-family:javanese Text;  
	}
	body
	{
		background-color:lightgray;
	}



.w3_agile_nav a {
    margin: 0 .1em;
    overflow: hidden;
    -moz-transition: ease-out 0.3s 0.1s;
    -o-transition: ease-out 0.3s 0.1s;
    -webkit-transition: ease-out 0.3s;
    -webkit-transition-delay: 0.1s;
    transition: ease-out 0.3s 0.1s;
}
.w3_agile_nav a span::before {
  width: 100%;
  height: 2px;
  background: red;
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  -moz-transition: 0.1s;
  -o-transition: 0.1s;
  -webkit-transition: 0.1s;
  transition: 0.1s;
  -moz-transform: translateX(-100%);
  -ms-transform: translateX(-100%);
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
}
.w3_agile_nav a span::after {
  width: 100%;
  height: 2px;
  background:red;
  content: "";
  position: absolute;
  right: 0;
  bottom: 0;
  -moz-transition: 0.1s 0.2s;
  -o-transition: 0.1s 0.2s;
  -webkit-transition: 0.1s;
  -webkit-transition-delay: 0.2s;
  transition: 0.1s 0.2s;
  -moz-transform: translateX(100%);
  -ms-transform: translateX(100%);
  -webkit-transform: translateX(100%);
  transform: translateX(100%);
}
.w3_agile_nav a::before {
  width: 2px;
  height: 100%;
  background: red;
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  -moz-transform: translateY(100%);
  -ms-transform: translateY(100%);
  -webkit-transform: translateY(100%);
  transform: translateY(100%);
  -moz-transition: 0.1s 0.3s;
  -o-transition: 0.1s 0.3s;
  -webkit-transition: 0.1s;
  -webkit-transition-delay: 0.3s;
  transition: 0.1s 0.3s;
}
.w3_agile_nav a::after {
  width: 2px;
  height: 100%;
  background: red;
  content: "";
  position: absolute;
  right: 0px;
  bottom: 0;
  -moz-transform: translateY(-100%);
  -ms-transform: translateY(-100%);
  -webkit-transform: translateY(-100%);
  transform: translateY(-100%);
  -moz-transition: 0.1s 0.1s;
  -o-transition: 0.1s 0.1s;
  -webkit-transition: 0.1s;
  -webkit-transition-delay: 0.1s;
  transition: 0.1s 0.1s;
}
.w3_agile_nav a:hover::before, .w3_agile_nav a:hover::after,.w3_agile_nav li.active a::before, .w3_agile_nav li.active a::after {
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -webkit-transform: translateX(0);
  transform: translateX(0);
}
.w3_agile_nav a:hover span::before, .link-effect-12 a:hover span::after,
.w3_agile_nav li.active a span::before, .w3_agile_nav li.active a span::after{
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -webkit-transform: translateX(0);
  transform: translateX(0);
}

th {
    box-shadow:0px 0px 0px 1px skyblue;
    color:green; 
    text-align:center;
    padding:5px;
   }
   td{
    box-shadow:0px 0px 0px 1px skyblue;    
    text-align:center;
    padding:4px;
  }
   table
   {
    border: collapse;
   padding:5px; 
    color:black;
    text-align:center;
   }

</style>

</head>
	
<body>
<!-- header -->
		<div class="container">