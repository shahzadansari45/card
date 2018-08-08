<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('connect.php'); 
		 session_start();
		if(!isset($_SESSION["UserName"]))
		{
			header("location:home.php");
	
	}?>

<html lang="en" class="no-js">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Card Generate System</title>
    <link href="css/media_query.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap CSS -->
    <link href="css/style_1.css" rel="stylesheet" type="text/css"/>
    <!-- Modernizr JS -->
    <script src="js/modernizr-3.5.0.min.js"></script>
</head>
<body class="single">
<div class="container-fluid fh5co_header_bg">
    <div class="container">
        <div class="row">
            
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row">


		<div class="col-12 col-md-2 fh5co_padding_menu"><img src="images/logo-tranp.png" "alt="img" class="img-responsive" width="100px"/></div>

	<div class="col-12 col-md-10 align-self-center">

                <div class="img-responsive" style="background-image: url('images/bgimg.png'); padding-top: 38px; color: white; width:1039px; height:136px;
                 background-repeat: no-repeat; background-size:auto;background-size:cover;background-position: 1px -170px;">
                 <center><h2>Online Card Generate System</h2></center></div>
         </div>
         </div>
         </div>
         </div>

</body>
</html>