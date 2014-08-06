<html>
<?php
session_start();
$uid=$_SESSION['uid'];
$con=mysqli_connect("localhost","root","","matrimonial");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 


$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 200000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    //echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    //echo "Type: " . $_FILES["file"]["type"] . "<br>";
    //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    $_FILES["file"]["name"]=$uid.$_FILES["file"]["name"];
    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      $link= "upload/" . $_FILES["file"]["name"];
	  $sql="INSERT INTO images(uid,link) VALUES('$uid','$link')";
	  $result = mysqli_query($con,"SELECT * FROM images WHERE link='$link'");
	  $row = mysqli_fetch_array($result);
	  $imgid=$row['img_id'];
	  
	  
if(!mysqli_query($con,$sql))
{
 die('Error: ' . mysqli_error($con));
}
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>
<body>
<form id="form" action="user-home.php" method="POST">
</form>
<script>
document.getElementById("form").submit();
</script>
</body>
</html>
