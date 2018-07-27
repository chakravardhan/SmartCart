<?php

session_start();
 $conn=mysqli_connect('localhost','root','');
  if($conn)
  {
	//  echo 'connected sql';
	  $db=mysqli_select_db($conn,'hack');
	   if($db)
	   {
		  // echo 'connected db';
		   $name=$_POST['username'];
		   $pass=$_POST['password'];
		   // echo $name;
		   $query="SELECT password FROM info WHERE usename='$name'";
		   if($ans=mysqli_query($conn,$query))
		   {
			$row=mysqli_fetch_assoc($ans);
			//echo $row["password"];
             $password=$row["password"];
              if($pass==$password)
			  {
				  
                $_SESSION['username']=$name;
			    header("Location:session.php"); 
				
			  }
             else
			 {
				echo '<script> alert("incorrect password or username ")</script>';
				header("Refresh:0;url=index.php");
			 }			 
		   }   
		  
	   }
	   else
	   {
		   echo 'database couldnt connect';
	   }
  }
  else
	  echo 'error in sql connect';
?>