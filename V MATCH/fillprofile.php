<!DOCTYPE html>
<html>
<body>
<?php // Create connection
session_start();
$con=mysqli_connect("localhost","root","","matrimonial");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
$fname=$_POST["firstname"];
$mname=$_POST["midname"];
$lname=$_POST["lastname"];
$dname=$_POST["dispname"];
$pid=$_SESSION['uid'];
//echo $pid;
$sex=$_POST["sex"];
$education=$_POST["EDUCATION"];
$occupation=$_POST["OCCUPATION"];
$living=$_POST["living"];
$mstatus=$_POST["marriage"];
if($mstatus==0)
{
$sectype="";
$kids="";
}
else
{$sectype=$_POST["secmarriage"];
$kids=$_POST["kids"];
}
$age=$_POST["fromage"];
$salary=$_POST["income"];
$rlgn=$_POST["RELIGION"];
if($living==0)
{
$country="";
$state=$_POST["state"];
$city=$_POST["location"];
}
else
{$country=$_POST["country"];
$state="";
$city="";
}
$height=$_POST["height"];
$build=$_POST["build"];

$complexion=$_POST["complx"];
$smoke=$_POST["smoke"];
$drink=$_POST["drink"];
$diet=$_POST["diet"];
$language=$_POST["mothertongue"];
$aboutme=$_POST["aboutu"];
$phno=$_POST["usrtel"];
$sql="INSERT INTO profile_m(pid,fname,mname,lname,dname,age,sex,rlgn,education,occupation,salary,living,country,state,city,marital_status,sec_type,kids,height,build,complexion,smoke,drink,diet,language,about_me,phno)
VALUES ('$pid','$fname','$mname','$lname','$dname','$age','$sex','$rlgn','$education','$occupation','$salary','$living','$country','$state','$city','$mstatus','$sectype','$kids','$height','$build','$complexion','$smoke','$drink','$diet','$language','$aboutme','$phno')";
if(!mysqli_query($con,$sql))
{
$sql1="UPDATE profile_m SET fname='$fname',mname='$mname',lname='$lname',dname='$dname',age='$age',sex='$sex',rlgn='$rlgn',education='$education',occupation='$occupation',salary='$salary',living='$living',country='$country',state='$state',city='$city',marital_status='$mstatus',sec_type='$sectype',kids='$kids',height='$height',build='$build',complexion='$complexion',smoke='$smoke',drink='$drink',diet='$diet',language='$language',about_me='$aboutme',phno='$phno'
WHERE pid=$pid";
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
 
  </html>
