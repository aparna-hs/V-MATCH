<html>
<?php session_start(); ?>
<body>
<?php // Create connection
$con=mysqli_connect("localhost","root","","matrimonial");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $uid1 = $_POST['u1']; 
  mysqli_query($con,"DELETE FROM user_tb WHERE uid='$uid1'");
  mysqli_close($con);
?>
<form id="form" action="admin-home.php" method="POST">

</form>
<script>
document.getElementById("form").submit();
</script>
</body>
</html>