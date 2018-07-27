<?php
 $conn=mysqli_connect('localhost','root','');
 if($conn)
 {
	 $select = mysqli_select_db($conn,'hack');
	 if($select)
	 {
		$fname = $_POST["form-first-name"];
        $lname = $_POST["form-last-name"];
        $email = $_POST["form-email"];
        $name=$_POST['username'];
        $pass=$_POST['password'];
        $query = "INSERT INTO info(usename,password,first,last,email) VALUES('$name','$pass','$fname','$lname','$email')";
            if(mysqli_query($conn,$query))
			{
				echo "<script> alert(\"registered\")</script>";
				header("Refresh:0;url=index.php");
			}				
			else
			{
				echo "<script> alert(\"naah\")</script>";
			    header("Refresh:0;url=index.php");
			}	
	 }
	 else
		echo "<script> alert(\"could not connect to sql\")</script>"; 
 }
 else
 {
	 echo "<script>alert(\"could not connect to sql\")</script>";
 }

?>
