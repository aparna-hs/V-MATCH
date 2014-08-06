<html>
	<body background="bg.png">
<?php // Create connection
session_start();
$con=mysqli_connect("localhost","root","","matrimonial");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $pid=$_POST["pid"];
  $links=array();
  $i=0;
  $result = mysqli_query($con,"SELECT * FROM images WHERE uid='$pid'");
  $flag=-1;
  echo "<table>";
   while($row = mysqli_fetch_array($result))
  {
    $flag++;
  	echo "<tr><td>";
	echo "<img src=".$row['link']." />";
	echo "<br><br>";
			echo "</tr></td>";
			
  }
  echo "</table>";
  if($flag==-1)
  echo "<h2>No Uploaded Images</h2>";
  $result1 = mysqli_query($con,"SELECT * FROM profile_m WHERE pid='$pid'");
  $row1 = mysqli_fetch_array($result1);
  $dname=$row['dname'];
  mysqli_close($con);
  ?>
  <br><br>
  <form id="form" action="user-home.php" method="POST">
<input type="hidden" value="<?php echo $dname; ?>" name="dusrname">
<input type="submit" name="subbut" id="submit" value="GO HOME" style="width:350;height:35;background-color:#ED1C24; color:#FFFFFF;" >

</form>
</body>
</html>
  
