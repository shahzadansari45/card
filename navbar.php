<?php include("connect.php");

?>
<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt="img" class="mobile_logo_width"/></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="aboutus.php">About us <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="cardgenerate.php">Cards Generate <span class="sr-only">(current)</span></a>
                    </li>
                     <li class="nav-item ">
                        <a class="nav-link" href="cards.php">Our Cards<span class="sr-only">(current)</span></a>
                                     
                    <li class="nav-item ">
                        <a class="nav-link" href="feedback.php">Feedback <span class="sr-only">(current)</span></a>
                    </li>
                    <?php //var_dump($_SESSION); 
					if(empty($_SESSION["UserName"])) { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="dropdownMenuButton2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Your <strong>Account</strong><span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                            <a class="dropdown-item" href="login.php">Login</a>
                            <a class="dropdown-item" href="signup.php">Sign Up</a>
                        </div>
                    </li>
                    <?php } else { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="dropdownMenuButton2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["UserName"]; ?><span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                            <a class="dropdown-item" href="logout.php?logout=0">Logout</a>
                        </div>
                    </li>
					<?php } ?>
                    
                </ul>
            </div>
        </nav>
    </div>
</div>
