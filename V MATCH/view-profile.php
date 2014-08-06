<!DOCTYPE html>
<html class="html">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.0.314.244"/>
  <title>View Profile</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?46317016"/>
  <link rel="stylesheet" type="text/css" href="css/master_b-master.css?4231298212"/>
  <link rel="stylesheet" type="text/css" href="css/view-profile.css?513901643" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>
   </head>
 <body>

  <div class="rgba-background clearfix" id="page"><!-- group -->
   <div class="clearfix grpelem" id="pu2195-4"><!-- column -->
    <div class="clearfix colelem" id="u2195-4"><!-- content -->
     
    </div>
    <div class="colelem" id="u2193"><!-- custom html -->
     <?php // Create connection
session_start();
$con=mysqli_connect("localhost","root","","matrimonial");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  //$ddname = $_SESSION['dusrname'];
  $dname = $_POST['dusrname'];
  //echo $dname;
  $result = mysqli_query($con,"SELECT * FROM profile_m WHERE dname='$dname'");
  $row = mysqli_fetch_array($result);
  $pid=$row['pid'];
  $result1 = mysqli_query($con,"SELECT * FROM pref_tb WHERE uid='$pid'");
  $row1 = mysqli_fetch_array($result1);
  $result2 = mysqli_query($con,"SELECT * FROM sns_tb WHERE sid='$pid'");
  $row2 = mysqli_fetch_array($result2);
  echo "<h1><b><u>PROFILE</u></b></h1>";
  echo "<br><br>";
  echo "<table>";
  echo "<tr><td>Name</td>";
  echo "<td> &nbsp;</td>";
  echo "<td>".$dname."</td></tr>";
  echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  echo "<tr><td>Age</td>";
  echo "<td> &nbsp;</td>";
  $row['age']=$row['age']+17;
  echo "<td>".$row['age']."</td></tr>";
  echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  
  echo "<tr><td>Religion</td>";
  echo "<td> &nbsp;</td>";
  echo "<td>".$row['rlgn']."</td></tr>";
  echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  
  echo "<tr><td>Education</td>";
  echo "<td> &nbsp;</td>";
  echo "<td>".$row['education']."</td></tr>";
  echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  
  echo "<tr><td>Occupation</td>";
  echo "<td> &nbsp;</td>";
  echo "<td>".$row['occupation']."</td></tr>";
  echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  
  $salary=$row['salary'];
  if($salary!="Select")
  {echo "<tr><td>Salary</td>";
  echo "<td> &nbsp;</td>";
  echo "<td>".$row['salary']."</td></tr>";
  echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  
  }
  $living=$row['living'];
  if($living==0)
  {
  	echo "<tr><td>Living in</td>";
  echo "<td> &nbsp;</td>";
  echo "<td>"."India"."</td></tr>";
  echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  
  echo "<tr><td>State</td>";
  echo "<td> &nbsp;</td>";
  echo "<td>".$row['state']."</td></tr>";
  echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  
  echo "<tr><td>City</td>";
  echo "<td> &nbsp;</td>";
  echo "<td>".$row['city']."</td></tr>";
  echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  
    
  }
else {
  echo "<tr><td>Living</td>";
  echo "<td> &nbsp;</td>";
  echo "<td>"."abroad"."</td></tr>";
  echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  
  echo "<tr><td>Country</td>";
  echo "<td> &nbsp;</td>";
  echo "<td>".$row['country']."</td></tr>";
  echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  
  }
$ms=$row['marital_status'];
if($ms==1)
{
	echo "<tr><td>Previously Married</td>";
  echo "<td> &nbsp;</td>";
  echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  
  if($row['sec_type']==0)
  echo "<td>"."Divorcee"."</td>";
  else
  echo "<td>"."Widower"."</td>";
  echo "<td> &nbsp;</td>";
  echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  
  if($row['kids']==0)
  echo "<td>"."With kids"."</td>";
  else
  echo "<td>"."Without kids"."</td></tr>";
  echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  

}
echo "<tr>";
if($row['diet']==0)
  echo "<td>"."Veggie"."</td>";
  else
  echo "<td>"."Non-Vegetarian"."</td>";

echo "</tr>";
echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  
echo "<tr>";
if($row['smoke']==0)
  echo "<td>"."Does Not Smoke"."</td>";
  else
  echo "<td>"."Smokes"."</td>";
echo "</tr>";
echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  
echo "<tr>";
if($row['drink']==0)
  echo "<td>"."Does Not Drink"."</td>";
  else
  echo "<td>"."Drinks"."</td>";
echo "</tr>";
echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  
$height=$row['height'];
  if($height!="")
  {echo "<tr><td>Height</td>";
  echo "<td> &nbsp;</td>";
  echo "<td>".$row['height']."</td></tr>";
  echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  
  }
 $build=$row['build'];
  if($build!="")
  {echo "<tr><td>Build</td>";
  echo "<td> &nbsp;</td>";
  echo "<td>".$row['build']."</td></tr>";
  echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  
  }  	
  $complexion=$row['complexion'];
  if($complexion!="")
  {echo "<tr><td>Complexion</td>";
  echo "<td> &nbsp;</td>";
  echo "<td>".$row['complexion']."</td></tr>";
  echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  
  } 
  echo "<tr><td>Mother Tongue</td>";
  echo "<td> &nbsp;</td>";
  echo "<td>".$row['language']."</td></tr>";
  echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  
  echo "<tr><td>About Me</td>";
  echo "<td> &nbsp;</td>";
  echo "<td>".$row['about_me']."</td></tr>";
  echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  
  echo "<tr><td>I am looking for</td>";
  echo "<td> &nbsp;</td>";
  echo "<td>".$row1['lookingfor']."</td></tr>";
  echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  
  if($result2){
  if($row2['fblink']!="NULL" || $row2['fblink']!="")
  {echo "<tr><td>My Facebook Profile</td>";
  echo "<td> &nbsp;</td>";
  echo "<td><a href=' ".$row2['fblink']."'>".$row2['fblink']."</a> </td></tr>";
  echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  }
  if($row2['linked']!="NULL" || $row2['linked']!="")
  {echo "<tr><td>My LinkedIn Profile</td>";
  echo "<td> &nbsp;</td>";
  echo "<td><a href='".$row2['linked']."'>".$row2['linked']."</a></td></tr>";
  echo "<tr>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  }}
  
  echo "</table>";
  mysqli_close($con);
  ?>
  <br>
 <br>
  <form name="view_images" id="view_images" method="post" action="viewimages.php" >
 
 <input type="hidden" name="pid" id="pid" value="<?php echo $pid; ?>" >
 <input type="submit" name="subbut" id="submit" value="View Photos" style="width:350;height:35;background-color:#ED1C24; color:#FFFFFF;" >
		 
 </form>
<br>
<br>
 <form name="express_interest" id="express_interest" method="post" action="express-interest.php" >

<input type="hidden" name="pid" value="<?php echo $pid; ?>" >
 <input type="submit" name="subbut" id="submit" value="Express Interest" style="width:350;height:35;background-color:#ED1C24; color:#FFFFFF;" >
		 
 </form>
 <br><br>
<form name="like" id="like" method="post" action="expresslike.php" >

<input type="hidden" name="pid" value="<?php echo $pid; ?>" >
 <input type="image" src="like.jpg" alt="Submit" style="width:200; height:45;">		 
 </form>
 <br>
 <br>
  <form name="like" id="like" method="post" action="user-home.php" >
<input type="submit" name="subbut" id="submit" value="Go Home" style="width:350;height:35;background-color:#ED1C24; color:#FFFFFF;" >

 </form>
  </html>  


</div>
   </div>
   <div class="pointer_cursor clearfix grpelem" id="u2046-5"><!-- content -->
    <a class="block" href="index.html"></a>
    <p><a class="nonblock" href="index.html">LOGOUT</a></p>
   </div>
   <div class="verticalspacer"></div>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script src="scripts/museutils.js?3865766194" type="text/javascript"></script>
  <script src="scripts/jquery.watch.js?4068933136" type="text/javascript"></script>
  <!-- Other scripts -->
  <script type="text/javascript">
   $(document).ready(function() { try {
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
