<?php
session_start();
$con=mysqli_connect("localhost","root","","matrimonial");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $uid=$_SESSION['uid'];
  
  $result = mysqli_query($con,"SELECT * FROM profile_m
WHERE pid='$uid'");
  $row = mysqli_fetch_array($result);
  $name1=$row['dname'];
  $name2=$_POST["name"];
  $result=mysqli_query($con,"SELECT * FROM profile_m");
  $flag=-1;
  
  while($row = mysqli_fetch_array($result))
  {
  $nm=$row['dname'];
  if($name2==$nm)
  {
  $flag=1;
  break;
  }
  }
  if($flag==-1)
  {
  	echo'
  <body background="bg.png">
  <div id="container" >

<div id="header" style="background-color:#FFA500;" style="height>

<div id="content" align="center" style="background-color:#EEEEEE;"><h1>
Profile Name invalid.Please Verify!  <a href=share-success.html>Go Back</a></h1></div>

<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
</div>

</div> </body>';
  }
else{
  
  $result1 = mysqli_query($con,"SELECT * FROM profile_m
WHERE dname='$name2'");
  $row1= mysqli_fetch_array($result1);
  $pid=$row1['pid'];
  $message=$_POST["message"];
  $datesuc=date("Y-m-d");
  mysqli_query($con,"INSERT INTO succ_tab (message,name1,name2,dateofsuc)
VALUES ('$message','$name1','$name2','$datesuc')");
 mysqli_query($con,"DELETE FROM user_tb WHERE uid='$uid'");
 mysqli_query($con,"DELETE FROM user_tb WHERE uid='$pid'");
 echo'
  <body background="bg.png">
  <div id="container" >

<div id="header" style="background-color:#FFA500;" style="height>

<div id="content" align="center" style="background-color:#EEEEEE;"><h1>
CONGRATULATIONS!!!! Thanks for using V Match <a href=index.html>GO HOME</a></h1></div>


<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
</div>

</div> </body>';
//echo '<script> jsfunction(); </script>';
}
 mysqli_close($con);
  ?>
      </html>

  
 
 
  