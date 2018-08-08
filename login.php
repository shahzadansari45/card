<?php 
include("connect.php");
	
session_start();
// var_dump($_SESSION);


if(isset($_POST['username']))
{
	$un=$_POST['username'];
	$pswd=$_POST['password'];
	$type=$_POST['type'];
	//var_dump($type); die;
	$status = "";
	if($type=="Administrator")
	{
		$sql = "select * from admin where userName='$un'";
		// echo $sql; die;
		$select=mysql_query($sql);
		$res=mysql_fetch_array($select);
		// print_r($res); die;
		$count=mysql_num_rows($select);
	
		if($count>0)
		{
			if($res['password']==$pswd)
			{
				$_SESSION['AdminName']=$res['userName'];
				$_SESSION['AdminId']=$res['adminID'];
				//print_r($_SESSION);
				header('location:adminpanel/home.php');
			}else{
				$status= "Invalid Password";
			header("location:login.php?st=$status");	   
			}
		}
		else
		{
			$status= "Invalid Username";
			header("location:login.php?st=$status");	   
		
		}
	}else if($type=="User"){
		$select=mysql_query("select * from admin where userName='$un'");
		$res=mysql_fetch_array($select);
		$count=mysql_num_rows($select);
		if($count>0)
		{
			if($res['password']==$pswd)
			{
				$_SESSION['UserName']=$res['userName'];
				$_SESSION['UserId']=$res['userID'];
				var_dump($_SESSION);
				header("location:home.php");
			}
			else
			{
				$status= 'Invalid Password';
			header("location:login.php?st=$status");	   
			}
		}else{
			$status= 'Invalid Username';
			header("location:login.php?st=$status");	   
			}
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

<div class="container-fluid mb-4">
    <div class="container">
        <div class="col-12 text-center contact_margin_svnit ">
            <div class="text-center fh5co_heading py-2">Login Form</div>
        </div>
        <div class="row">
            <div class="col-12">
						<h2 style=" color:#000;"><?php echo @$_GET['st'];?></h2>

                <form method="post" class="row" id="fh5co_contact_form" action="login.php">
                    <div class="col-12 py-3 hide">
                        <input type="text" class="form-control fh5co_contact_text_box" name="username" placeholder="Enter Your Name" />
                    </div>
                    <div class="col-12 py-3">
                        <input type="password" class="form-control fh5co_contact_text_box" name="password" placeholder="Password" />
                    </div>
                    <div class="col-12 py-3">
					<label>Select Actor</label>
					<select  class="form-control" name="type">
                    <option value="">--Select One--</option>
                    <option>Administrator</option>
                    <option>User</option>
                    </select>
                    		</div>

                    <div class="col-12 py-3 text-center"> 
                    <input type="submit" value="Login"class="btn contact_btn">
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>






</body>
</html>