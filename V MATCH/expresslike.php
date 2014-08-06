<html>
<?php // Create connection
session_start();
$con=mysqli_connect("localhost","root","","matrimonial");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $uid1=$_POST["pid"];
  $uid2=$_SESSION['uid'];
  mysqli_query($con,"INSERT INTO exp_interest (uid1,uid2,likes)
VALUES ('$uid2', '$uid1','1')"); 
$result = mysqli_query($con,"SELECT * FROM profile_m WHERE pid='$uid1'");
  $row = mysqli_fetch_array($result);
  
  $dname=$row['dname'];
  
mysqli_close($con);
?>
<body> 
 <form id="form" action="view-profile.php" method="POST">
<input type="hidden" value="<?php echo $dname; ?>" name="dusrname">
</form>
<script>
document.getElementById("form").submit();
</script>
</body>
</html>