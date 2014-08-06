<!DOCTYPE html>
<html>
<head>
<style>
.sub1 {
  border: 0;
  background: linear-gradient(#768191, #535b65);
  border-radius: 4px;
  box-shadow: 0 1px 0 rgba(255, 255, 255, 0.15), 0 5px 0 #404853;
  color: #fff;
  cursor: pointer;
  font-weight: bold;
  padding: 12px 20px;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  text-transform: uppercase;
  transition: all .1s linear;
}
 .sub1:hover {
  color: #d4d7da;
}
.sub1:active {
  box-shadow: 0 1px 0 rgba(255, 255, 255, 0.15), 0 2px 0 #404853;
  transform: translateY(3px);
}
.zebra td, .zebra th {
    padding: 10px;
    border-bottom: 1px solid #f2f2f2;    
}

.zebra tbody tr:nth-child(even) {
    background: #f5f5f5;
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset; 
    -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;  
    box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;        
}

.zebra th {
    text-align: left;
    text-shadow: 0 1px 0 rgba(255,255,255,.5); 
    border-bottom: 1px solid #ccc;
    background-color: #eee;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#eee));
    background-image: -webkit-linear-gradient(top, #f5f5f5, #eee);
    background-image:    -moz-linear-gradient(top, #f5f5f5, #eee);
    background-image:     -ms-linear-gradient(top, #f5f5f5, #eee);
    background-image:      -o-linear-gradient(top, #f5f5f5, #eee); 
    background-image:         linear-gradient(top, #f5f5f5, #eee);
}

.zebra th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;  
}

.zebra th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
}

.zebra th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
}

.zebra tfoot td {
    border-bottom: 0;
    border-top: 1px solid #fff;
    background-color: #f1f1f1;  
}

.zebra tfoot td:first-child {
    -moz-border-radius: 0 0 0 6px;
    -webkit-border-radius: 0 0 0 6px;
    border-radius: 0 0 0 6px;
}

.zebra tfoot td:last-child {
    -moz-border-radius: 0 0 6px 0;
    -webkit-border-radius: 0 0 6px 0;
    border-radius: 0 0 6px 0;
}

.zebra tfoot td:only-child{
    -moz-border-radius: 0 0 6px 6px;
    -webkit-border-radius: 0 0 6px 6px
    border-radius: 0 0 6px 6px
}
  
</style>
</head>
<body background="bg.png" >
<?php // Create connection
session_start();
$con=mysqli_connect("localhost","root","","matrimonial");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $gen=$_POST['lookingFor'];
  $toage=$_POST['toage'];
  $fromage=$_POST['fromage'];
  $rel=$_POST['RELIGION'];
  $f=0;
  if($rel!='')
  $qsch=("SELECT fname,mname,lname,age FROM profile_m WHERE sex='$gen' AND age<='$toage' AND age>='$fromage' AND rlgn='$rel'  ");
  else
  $qsch=("SELECT fname,mname,lname,age FROM profile_m WHERE sex='$gen' AND age<='$toage' AND age>='$fromage'   ");
  
  $resultqsch = mysqli_query($con,$qsch);
  
  echo "<div style='background-color:#d4d7ef;text-align:center;height:90px; text-align: center;vertical-align: center;
line-height:90px;'   > <h1  style='vertical-align: middle;text-color:#FFFFFF'>Matches for You </h1></div>";



echo '<div style="align:center;">';
  echo '<table class="zebra" align="center" col width="1000px" >';
  echo '<thead>
    <tr>
		<th>#</th>
        <th>     NAME       </th>  
		
        
    </tr>
    </thead>';
	$c=1;
  while($rowq = mysqli_fetch_array($resultqsch))
  {
  echo "<tr><td> " .$c. "</td><td>" . $rowq['fname'] . " &nbsp;&nbsp;&nbsp;" . $rowq['lname'] . "</td></tr>";
  if($rowq==NULL) {
  $f=0;
  }
  else {
  $f=1;
  $c=$c+1;
  }
  }
  echo "</table></div>";
  
 echo "\n\n\n\n";
 
 if($f==0) echo 'Sorry no matches found!';
 

if(!mysqli_query($con,$qsch))
{
 die('Error: ' . mysqli_error($con));
}
echo '
 <br><br>
<table align="center" col width="1000px"> <tr><td>
<form name="afterqs" id="afterqs" method="post" action="index.html" >
<input type="submit" class = "sub1" name="btindex" id="btindex" value="Back"  >
</form></tr></td>
 </table>
 
 ' ;
  echo'<br><br>';
 echo '<p style="font-size:30px ; font-family:Comic Sans MS; padding-left:5em " >To view complete profile: </p>';

 echo '

<table align="center" col width="1000px"><tr><td> 
<form name="afterqs2" id="afterqs2" method="post" action="sign-up.html" >
<input type="submit" class="sub1" name="btindex" id="btindex" value="Sign up here "  >
</form></tr></td>
 </table>
 ' ;
 
 mysqli_close($con);
?>
</body>

</body>

</html>
