<!DOCTYPE html>
<html class="html">
 <head></head>
 <body background="bg.png">
 
 <div id="container" >

<div id="header" style="background-color:#FFA500;" style="height>

<div id="content" align="center" style="background-color:#EEEEEE;"><h1>
SUCCESS STORIES</h1></div>


</div>
<div id="footer" align="center" style="font-size:20pt;">

  	<?php
	$con=mysqli_connect("localhost","root","","matrimonial");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
 	$result = mysqli_query($con,"SELECT * FROM succ_tab");
	
	echo "<table>";

    while($row = mysqli_fetch_array($result))
    {
    	echo "<tr>";
  		echo "<td>" . $row['name1'] . "</td>";
		echo "<td>&nbsp;&nbsp;</td>";
		echo "<td>" . "and" . "</td>";
		echo "<td>&nbsp;&nbsp;</td>";
  		echo "<td>" . $row['name2'] . "</td>";
		echo "<td>&nbsp;&nbsp;</td>";
  		echo "<td>" . ":" . "</td>";
		echo "<td>&nbsp;</td>";
		echo "<td>" . $row['message'] . "</td>";
		echo "</tr>";
  		echo "<tr>";
	    echo "<td>&nbsp;</td>";
		echo "</tr>";
		echo "<tr>";
	    echo "<td>&nbsp;</td>";
		echo "</tr>";
  	
  	
    }
    echo "</table>";

mysqli_close($con);
?>
 	
 	</div>
 	
</body>
 
</html>
