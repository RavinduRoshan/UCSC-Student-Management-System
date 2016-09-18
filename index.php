<?php
require_once("includes/initialize.php");
$message = "";

if($session->is_logged_in()) {
  redirect_to("public/home.php");
}

if (isset($_POST['submit'])) { // Form has been submitted.

  $username = trim($_POST['username']); //set the typed username to  $username
  $password = trim($_POST['password']); //set the typed password to $password 
  $h_password = sha1($password); // set hashed password to $h_password 
  // Check database to see if username/password exist.
    $found_user = User::authenticate($username, $h_password); // if pwd & user ok user found ,$found_user = true
    
  if ($found_user) {
    $session->login($found_user); // if user ok go to session object
    redirect_to("public/home.php");
    
  } else {
    // username/password combo was not found in the database
    $message = "Username/password combination incorrect.";
  }
  
} else { // Form has not been submitted.
  $username = "";
  $password = "";
}

?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UCSC Student Management System Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">

                            <h1 style="font-family: Agency FB"><strong>UCSC</strong> Student Management System</h1>
                            <!--<div class="description">
                                <img class="img-responsive col-sm-offset-1" src="assets//img//backgrounds//logo2.jpg" alt="UCSC_logo" width="620" height="450">
                            </div>-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-4">
                            <div class="panel panel-success panel-transparent" style="filter:alpha(opacity=50); opacity:0.5;">
                            <img class="img-responsive col-sm-offset-1" src="assets//img//backgrounds//ucsc.png" alt="UCSC_logo" width="300">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-4 form-box">
                        	<div class="form-top">
                                
                        		<div class="form-top-left">
                        			<h3>Login to System</h3>
                            		<p>Enter username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="index.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username" value="<?php
                                    echo htmlentities($username); ?>" required>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password" value="<?php
                                    echo htmlentities($password); ?>" required>
			                        </div>
			                        <button type="submit" name="submit" class="btn">Login</button>
                                    <div class="form-group" style="color: white">
                                        <?php if(!empty($message)){echo "<p class=\"message\">".$message."</p>";} ?>
                                        <?php if(!empty($errors)){display_errors($errors);} ?>
                                    </div>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    <!--
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>...or login with:</h3>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-twitter"></i> Twitter
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-google-plus"></i> Google Plus
	                        	</a>
                        	</div>
                        </div>
                    </div>-->
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>