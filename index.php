<?php 
header("Refresh:300;url=timechange.php");
?>
<html lang="en">
 
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Smart Cart</title>

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
                            <h1>SMART SAVINGS PORTAL <br><i class="fa fa-amazon" style="font-size:48px;"></i></h1>
                            <div class="description">
                            	<p>
	                               Login &amp; Register    	
                            	</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3 style="font-size:24px;">Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="login.php" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username" required>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password" required>
				                        </div>
				                        <button type="submit" class="btn">Sign in!</button>
				                    </form>
			                    </div>
		                    </div>
		                
		                	
	                        
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="register.php" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">First name</label>
				                        	<input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name" required>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Last name</label>
				                        	<input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name" required>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="email" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email" required>
				                        </div>
				                        <div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username" required>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password" required>
				                        </div>
				                        <button type="submit" class="btn">Sign me up!</button>
				                    </form>
									
			                    </div>
									
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p> <i class="fa fa-smile-o" style="font-size:48px;"></i></p>
						<p>&copy; <?php echo date("Y") ?> Chakravardhan Reddy</p>
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>