<!DOCTYPE html>
<html>
<body>
<?php // Create connection
session_start();
$con2=mysqli_connect("localhost","root","","matrimonial");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
 $fromage=$_POST["fromage"];
$toage=$_POST["toage"];
$uid=$_SESSION['uid'];
$education=$_POST["EDUCATION"];
$occupation=$_POST["OCCUPATION"];
$living=$_POST["living"];
$mstatus=$_POST["marriage"];
if($mstatus!=0 ) 
{if($mstatus!=1){
	$mstatus="NULL";
	}
}
$salary=$_POST["income"];
$rlgn=$_POST["RELIGION"];

$height=$_POST["height"];
$build=$_POST["build"];

$complexion=$_POST["complx"];
$smoke=$_POST["smoke"];
$drink=$_POST["drink"];
$diet=$_POST["diet"];
$language=$_POST["mothertongue"];
$aboutmatch=$_POST["aboutmatch"];
$sql2="INSERT INTO pref_tb(uid,fromage,toage,rlgn,education,occupation,salary,living,marital_status,height,build,complexion,smoke,drink,diet,language,lookingfor)
VALUES ('$uid','$fromage','$toage','$rlgn','$education','$occupation','$salary',$living,$mstatus,'$height','$build','$complexion',$smoke,$drink,$diet,'$language','$aboutmatch')";
if(!mysqli_query($con2,$sql2))
{$sql1="UPDATE pref_tb SET fromage='$fromage',toage='$toage',rlgn='$rlgn',education='$education',occupation='$occupation',salary='$salary',living=$living,marital_status=$mstatus,height='$height',build='$build',complexion='$complexion',smoke=$smoke,drink=$drink,diet=$diet,language='$language',lookingfor='$aboutmatch' 
WHERE uid='$uid'";
if(!mysqli_query($con2,$sql1))
{
 die('Error: ' . mysqli_error($con2));
}
	


}
mysqli_close($con2);
  ?>
 <form id="form" action="user-home.php" method="POST">

</form>
<script>
document.getElementById("form").submit();
</script>
</html>
  </html>
