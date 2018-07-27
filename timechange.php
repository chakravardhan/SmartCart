<?php
require_once 'twilio-php-master/twilio/autoload.php'; // Loads the library
use Twilio\Rest\Client;


session_start();
 $conn=mysqli_connect('localhost','root','');
  if($conn)
  {
	//  echo 'connected sql';
	  $db=mysqli_select_db($conn,'hack');
	   if($db)
	   {
         $time = time();
		 $query = "SELECT time FROM product";
		 if($row = mysqli_query($conn,$query))
		 {
			 while($ans = mysqli_fetch_assoc($row))
			 {
				 if(($ans['time'] - $time )/60 > 120)
				 {
					 $time1=$ans['time'];
					 $query1 = "DELETE FROM product WHERE time='$ans[$time1]'" ; 
					 $row1 = mysqli_query($conn,$query1);
					 // Your Account Sid and Auth Token from twilio.com/user/account
$sid = 'AC0462f1654cb9067969d6e69080aebcb4';
$token ='d454488523177e7403bc88db003202cd' ;
$client = new Client($sid, $token);

$client->messages->create(
    "+919035845336",
    array(
        'from' => '+18565284613',
        'body' => ' WE CANNOT PROCESS YOUR REQUEST , SORRY FOR THE INCONVINIENCE',
        'mediaUrl' => '',
    )
);
				 }					 
			 }
		}
		$i=0;
		$pincodes = array();
		$query1 = "SELECT COUNT(*),pincode AS count FROM product GROUP BY pincode";
		if($row1= mysqli_query($conn,$query1))
		{
			while($ans1= mysqli_fetch_assoc($row1))
			{
				if($ans1['count'] > 1)
				{
					$pincodes[$i++] = $ans1['pincode'];
				}
			}
		}
		
		for($i=0;$i<count(pincodes);$i++)
             			
		 {
			 $query2 = "SELECT mob FROM product WHERE pincode = '$pincodes[$i]'";
			 if($row2 = mysqli_query($conn,$query2))
			 {
				 while($ans2=mysqli_fetch_array($row2))
				 {
					 $mobile = $ans2['mob'];
					 
					 
					


// Your Account Sid and Auth Token from twilio.com/user/account
$sid = 'AC0462f1654cb9067969d6e69080aebcb4';
$token ='d454488523177e7403bc88db003202cd' ;
$client = new Client($sid, $token);

$client->messages->create(
    "+919035845336",
    array(
        'from' => '+18565284613',
        'body' => 'YOUR ORDER IS PLACED , YOU CAN EXPECT THE DELIVERY IN 10 DAYS ',
        'mediaUrl' => '',
    )
);

      					 
				$query3 = "DELETE FROM product WHERE pincode = '$pincodes[$i]'";	 
				$row3 = mysqli_query($conn,$query3);	 
					 
				 }
			 }
			 
		 }
		 header('Location: ' . $_SERVER['HTTP_REFERER']);
       }
  }	   

?>