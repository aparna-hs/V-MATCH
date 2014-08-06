<html>
<?php
///subscribe form
  session_start();
  $con=mysqli_connect("localhost","root","","matrimonial");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $uid=$_SESSION['uid'];
  $result=mysqli_query($con,"SELECT * FROM user_tb WHERE uid='$uid'");
  $row=mysqli_fetch_array($result);
	
  $recipient = "hs.aparna.blr@gmail.com"; ///  Your Email address
  $subject = 'Query asked on V Match ( Member )';
  $message = 'From : '.$row['email'].
  'Message: '.$_POST["message"]
  ;
  
  
  mail("$recipient", $subject,
  $message, "From:" . $recipient);
 
 ?>
 <form id="form" action="user-home.php" method="POST">

</form>
<script>
document.getElementById("form").submit();
</script>

  </html>
