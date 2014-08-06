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
  $logintype=$_POST["usertype"];
  if($logintype=="user"){
  $result=mysqli_query($con,"SELECT * FROM user_tb");
  $flag=-1;
  
  while($row = mysqli_fetch_array($result))
  {
  $nm=$row['email'];
  $pass=$row['password'];
  if($_POST["userEmail"]==$nm && $_POST["userPass"]==$pass)
  {
  $flag=1;
  $uid=$row['uid'];
  $_SESSION['uid']= $uid;
  echo'
  <body background="bg.png">
  <div id="container" >

<div id="header" style="background-color:#FFA500;" style="height>

<div id="content" align="center" style="background-color:#EEEEEE;"><h1>
Login Success!!! Proceed to <a href=user-home.php>Home</a></h1></div>

<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
</div>

</div> </body>';

   }
  
  }
  if($flag==-1)
  {
  echo'
  <body background="bg.png">
  <div id="container" >

<div id="header" style="background-color:#FFA500;" style="height>

<div id="content" align="center" style="background-color:#EEEEEE;"><h1>
Email id or password incorrect <a href=login.html>Login</a> again</h1></div>

<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
</div>

</div> </body>';
    }
	}
	else
	{
	$result=mysqli_query($con,"SELECT * FROM admin_tb");
  $flag=-1;
  
  while($row = mysqli_fetch_array($result))
  {
  $nm=$row['email'];
  $pass=$row['password'];
  if($_POST["userEmail"]==$nm && $_POST["userPass"]==$pass)
  {
  $flag=1;
  $aid=$row['aid'];
  $_SESSION['aid']= $aid;
  echo'
  <body background="bg.png">
  <div id="container" >

<div id="header" style="background-color:#FFA500;" style="height>

<div id="content" align="center" style="background-color:#EEEEEE;"><h1>
Login Success!!! Proceed to <a href=admin-home.php>Home</a></h1></div>

<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
</div>

</div> </body>';

   }
  
  }
  if($flag==-1)
  {
    echo'
  <body background="bg.png">
  <div id="container" >

<div id="header" style="background-color:#FFA500;" style="height>

<div id="content" align="center" style="background-color:#EEEEEE;"><h1>
Email id or password incorrect <a href=login.html>Login</a> again</h1></div>

<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
</div>

</div> </body>';
    }
	}
  
  
  
  ?>
  <br>

</body>
</html>
