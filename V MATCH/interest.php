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
  //echo $uid1;

$uid2=$_SESSION['uid'];
  //echo $uid2;
  $message=$_POST["message"];
  //echo $message;
  $resu="INSERT INTO exp_interest (uid1,uid2,msg)
VALUES ('$uid2','$uid1','$message')"; 
if (!mysqli_query($con,$resu))
  {
  die('Error: ' . mysqli_error($con));
  }
$result = mysqli_query($con,"SELECT * FROM profile_m WHERE pid='$uid1'");
  $row = mysqli_fetch_array($result);
  $dname=$row['dname'];
  //echo $dname;
mysqli_close($con);
?>
<body> 
 <form id="form" action="view-profile.php" method="POST">
<input type="hidden" name="dusrname" id="name" value="<?php echo $dname; ?>" >
</form>
<script>
document.getElementById("form").submit();
</script>
</body>
</html>
