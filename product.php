<?php

header("Refresh:300;url=timechange.php");

session_start();
 $conn=mysqli_connect('localhost','root','');
  if($conn)
  {
	//  echo 'connected sql';
	  $db=mysqli_select_db($conn,'hack');
	   if($db)
	   {

       $url = $_POST['url'];
       $add = $_POST['address'];
       $pin = $_POST['code'];
       $mobile = intval($_POST['mob']);
	   $time = time();
	   $query = "INSERT INTO product(url,address,pincode,mob,time) VALUES('$url','$add','$pin','$mobile','$time')" ;
	      if(mysqli_query($conn,$query))
		  {
			  echo '<script type="text/javascript"> alert("Database updated") ;</script>'  ;
			  header("Location:timechange.php");
			 
		  }
		  else
		  {
			  echo '<script> alert("Try after sometime"); </script>';
			  header("Location:timechange.php");			 
		  }
	   }
  }   
?>