<!DOCTYPE html>
<html class="html">
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
    background-color: #ffff00;
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

 
 
 
 
 
 
 
 
 
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.0.314.244"/>
  <title>Admin Home</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?46317016"/>
  <link rel="stylesheet" type="text/css" href="css/master_b-master.css?4231298212"/>
  <link rel="stylesheet" type="text/css" href="css/admin-home.css?37827036" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>
   </head>
 <body>

  <div class="rgba-background clearfix" id="page"><!-- group -->
   <div class="clearfix grpelem" id="pu2163-4"><!-- column -->
    <div class="clearfix colelem" id="u2163-4"><!-- content -->
     <p>USER LIST</p>
    </div>
    <div class="colelem" id="u2161"><!-- custom html -->
     <?php session_start(); ?>
<body>
<?php // Create connection
$con=mysqli_connect("localhost","root","","matrimonial");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
 // echo "USER LIST" ;
 // echo "<br><br>";
  $sql=("SELECT * FROM user_tb");
   $result = mysqli_query($con,"SELECT * FROM user_tb ORDER BY uid ASC");
     //echo '<table>';
	  echo '<table class="zebra" align="center"  >';
  echo '<thead>
    <tr>
		<th>UID</th>
        <th> EMAIL ID</th>  
		<th>PASSWORD</th>
		
        
    </tr>
    </thead>';
     //echo "<tr><td> " ."UID". "</td><td>&nbsp;&nbsp;</td><td>" . "EMAIL ID" . "</td><td>&nbsp;&nbsp;</td><td>" ."PASSWORD". "</td></tr>"; 
	
     
 while($row = mysqli_fetch_array($result))
  {
		
	 echo "<tr><td> " . $row['uid'] . ".</td><td>" . $row['email'] ."</td><td>".$row['password']. "</td></tr>"; 
	 
  }
 echo "</table>";
 
if(!mysqli_query($con,$sql))
{
 die('Error: ' . mysqli_error($con));
}

echo '
 <br><br>
<table > 
<form name="god" id="god" method="post" action="adminnext.php" >


<tr>
<td>Enter uid of user to be deleted:</td>
</tr> 
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td><input type="text" value="0" name="u1" id="u1"></td>
 </tr>
 
  <tr>
		 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		 </tr>
		 
		 <tr><td>
		 <input type="submit" name="subbut" class="sub1" value="Update"  >
		 </td></tr>
 </table>
 </form>' ;
 
 mysqli_close($con);
?>
<br>
<br>
<form name="report" action="reportpage.php" method="post">
<input type="submit" value="Generate Report" name="rep" class="sub1">
</form>
</body>
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
