<!DOCTYPE html>
<?php session_start(); ?>
<html>
<body>


<?php // Create connection
$con=mysqli_connect("localhost","root","","matrimonial");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $result=mysqli_query($con,"SELECT * FROM user_tb");
  $flag=-1;
  
  while($row = mysqli_fetch_array($result))
  {
  $nm=$row['email'];
  if($_POST["emailid"]==$nm)
  {
  $flag=1;
  echo'
  <body background="bg.png">
  <div id="container" >

<div id="header" style="background-color:#FFA500;" style="height>

<div id="content" align="center" style="background-color:#EEEEEE;"><h1>
Account Already exists with this email! Please Verify!</h1></div>

<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
</div>

</div> </body>';

   }
  
  }
  if($flag==-1)
  {
  $email=$_POST["emailid"];
  $pass=$_POST["userPass"];
  
  mysqli_query($con,"INSERT INTO user_tb (email,password)
VALUES ('$email','$pass')");
  $result=mysqli_query($con,"SELECT * FROM user_tb WHERE email='$email'");
  $row=mysqli_fetch_array($result);
	$_SESSION['uid']= $row['uid'];
  
  echo'
  <body background="bg.png">
  <div id="container" >

<div id="header" style="background-color:#FFA500;" style="height>

<div id="content" align="center" style="background-color:#EEEEEE;"><h1>
Congratulations!! You are now a member of V MATCH. Go to <a href="user-home.php">Home</a></h1></div>

<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
</div>

</div> </body>';
    }
	
	
	
  
  
  
  ?>
  <br>

</body>
</html>
