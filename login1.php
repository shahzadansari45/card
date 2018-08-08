<?php 
include("connect.php");
	
session_start();
$status="";
if(isset($_POST["username"]))
{
		$un = $_POST['username'];
		$psw = $_POST['password'];
	$query=mysql_query("select * from admin where UserName='$un' and password='$psw' AND type = 1");
	$res=mysql_fetch_array($query);
	if(mysql_num_rows($query)>0)
	{
		if($res["password"]==$psw)
		{
			$_SESSION["Name"]=$res["userName"];
			//$_SESSION["Password"]=$res["password"];
			header("location:home.php");
			}
		else
		{
			$status="Invalid Password";
			
			}
		}
		else
		{
			$status="Invalid User Name";
			}
	}
?>
		
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
<body>
<div class="container-fluid fh5co_header_bg">
    <div class="container">
        <div class="row">
            
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
        <?php 
		  include("logo.php");
		  include("header.php"); 
		  ?>
	   </div>
    </div>
</div>
<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt="img" class="mobile_logo_width"/></a>

        </nav>
    </div>
</div>


<div class="container-fluid mb-4">
    <div class="container">
        <div class="col-12 text-center contact_margin_svnit ">
            <div class="text-center fh5co_heading py-2">Login Form</div>
        </div>
        <div class="row">
            <div class="col-12">
                        <h3><?php echo @$status;?></h3>

                <form method="post" class="row" id="fh5co_contact_form" action="login.php">
                    <div class="col-12 py-3 hide">
                        <input type="text" class="form-control fh5co_contact_text_box" name="username" placeholder="Enter Your Name" />
                    </div>
                    <div class="col-12 py-3">
                        <input type="password" class="form-control fh5co_contact_text_box" name="password" placeholder="Password" />
                    </div>
                    <div class="col-12 py-3 text-center"> <input type="submit" value="Login"class="btn contact_btn"></div>
                </form>
            </div>
            
        </div>
    </div>
</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Main -->
<script src="js/main.js"></script>

</body>
