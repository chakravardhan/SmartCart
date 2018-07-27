<?php 
session_start();
header("Refresh:300;url=timechange.php");
?>
<html>
<head>
 <title><?php echo $_SESSION['username']; ?></title>
   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Smart</title>

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
      <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Enter the details</h1>
                            <div class="description">
                            	<p>
	                            	
                            	</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			
	                        		</div>
	                        		<div class="form-top-right">
	                        		<!--	<i class="fa fa-edit"></i> -->
									
								<form role="form" action="logout.php" class="registration-form">
									     <button type="submit" class="btn">Log Out</button>
									</form>
	                        		
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="product.php" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="product_url">PRODUCT URL</label>
				                        	<input type="text" name="url" placeholder="Product URL..." class="form-username form-control" id="form-username" required>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="address">ADDRESS</label>
				                        	<input type="text" name="address" placeholder="Address..." class="form-username form-control" id="address" required>
				                        </div>
										<div class="form-group">
				                    		<label class="sr-only" for="pin_code">PIN CODE</label>
				                        	<input type="text" name="code" placeholder="PIN CoDE" class="form-username form-control" id="form-pin" required>
				                        </div>
									
										<div class="form-group">
				                        	<label class="sr-only" for="mob">mobile</label>
				                        	<input type="text" name="mob" placeholder="mobile no..." class="form-username form-control" id="mob" required>
				                        </div>
				                        <button type="submit" class="btn">Submit</button>
				                    </form>
									
								</div>
			                    </div>
								
		                    </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
		
</body>
</html>
