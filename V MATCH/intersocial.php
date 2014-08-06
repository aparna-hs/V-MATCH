<?php
session_start();
$con=mysqli_connect("localhost","root","","matrimonial");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $sid=$_SESSION['uid'];
  $fblink=$_POST["fb"];
  $linked=$_POST["lin"];
  $sql="INSERT INTO sns_tb(sid,fblink,linked) VALUES ('$sid','$fblink','$linked')";
    if(!mysqli_query($con,$sql))
  {
$sql1="UPDATE sns_tb SET fblink='$fblink' , linked='$linked' WHERE sid='$sid' "; 

if(!mysqli_query($con,$sql1))
{
 die('Error: ' . mysqli_error($con));
}
}

mysqli_close($con);
  ?>
  <form id="form" action="user-home.php" method="POST">

</form>
<script>
document.getElementById("form").submit();
</script>

 
  </html>

  
  
    
  