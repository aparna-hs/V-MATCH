<html>
<?php
session_start();
$con=mysqli_connect("localhost","root","","matrimonial");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $uid=$_SESSION['uid'];
  mysqli_query($con,"DELETE FROM user_tb WHERE uid='$uid'");
  mysqli_close($con);
  ?>
  <body> 
 <form id="form" action="index.html" method="POST">

</form>
<script>
document.getElementById("form").submit();
</script>
</body>
</html>