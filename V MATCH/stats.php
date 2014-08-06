<html>
<head>
<style>

body {
    width: 600px;
    margin: 40px auto;
    font-family: 'trebuchet MS', 'Lucida sans', Arial;
    font-size: 14px;
    color: #444;
}

table {
    *border-collapse: collapse; /* IE7 and lower */
    border-spacing: 0;
    width: 100%;    
}

.bordered {
    border: solid #ccc 1px;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    -webkit-box-shadow: 0 1px 1px #ccc; 
    -moz-box-shadow: 0 1px 1px #ccc; 
    box-shadow: 0 1px 1px #ccc;         
}

.bordered tr:hover {
    background: #fbf8e9;
    -o-transition: all 0.1s ease-in-out;
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    -ms-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;     
}    
    
.bordered td, .bordered th {
    border-left: 1px solid #ccc;
    border-top: 1px solid #ccc;
    padding: 10px;
    text-align: left;    
}

.bordered th {
    background-color: #dce9f9;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#ebf3fc), to(#dce9f9));
    background-image: -webkit-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:    -moz-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:     -ms-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:      -o-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:         linear-gradient(top, #ebf3fc, #dce9f9);
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset; 
    -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;  
    box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;        
    border-top: none;
    text-shadow: 0 1px 0 rgba(255,255,255,.5); 
}

.bordered td:first-child, .bordered th:first-child {
    border-left: none;
}

.bordered th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;
}

.bordered th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
}

.bordered th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
}

.bordered tr:last-child td:first-child {
    -moz-border-radius: 0 0 0 6px;
    -webkit-border-radius: 0 0 0 6px;
    border-radius: 0 0 0 6px;
}

.bordered tr:last-child td:last-child {
    -moz-border-radius: 0 0 6px 0;
    -webkit-border-radius: 0 0 6px 0;
    border-radius: 0 0 6px 0;
}


button {
    background:none!important;
     border:none; 
     padding:0!important;
    /*border is optional*/
     border-bottom:1px solid #444; 
	 text-decoration: underline;
border: none;
color: blue;
cursor: pointer;
}

</style>
</head>
<body>
<?php // Create connection
session_start();

$con=mysqli_connect("localhost","root","","matrimonial");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  $countstat=0;
  
$toage=$_POST['toage'];
  $fromage=$_POST['fromage'];
  $rel=$_POST['RELIGION'];
  $lang=$_POST['mothertongue'];
  $mtype=$_POST['mtype'];
  $f=0;
  $year=$_POST['fromdate'];
$year1=$_POST['todate'];
$flag=0;
  $cs=0;
  
  $count=0;
  if($year!="" && $year1!=""){
 $flag=1;
	$newq = ("SELECT * FROM succ_tab WHERE dateofsuc BETWEEN '$year' AND '$year1' ");
	$resultdate = mysqli_query($con,$newq);
	echo '<table class="bordered" >';
   echo '<thead>

    <tr>
        <th>NAME1</th>
		<th>NAME2</th>        
        <th>DATE</th>
        
    </tr>
    </thead>';
	
  while($rownew = mysqli_fetch_array($resultdate))
  {
  
  $cs++;
 // $ddname = $rownew['name'];
	//$getsex=$rownew['sex']==1?'M':'F';
	
	
  echo "<tr><td> " . $rownew['name1'] . "</td><td>" . $rownew['name2'] . "</td><td>" . $rownew['dateofsuc'] . "</td></tr>";
  
 
  }
   echo "</table>";
   echo "<br><br><h2>No of records = ".$cs."</h2>";
 echo "\n\n\n\n";
 }
 
 else if($year!="" && $year1==""){
 $flag=1;
	$newq = ("SELECT * FROM succ_tab WHERE dateofsuc >= '$year' ");
	$resultdate = mysqli_query($con,$newq);
	echo '<table class="bordered" >';
   echo '<thead>

    <tr>
         <th>NAME1</th>
		<th>NAME2</th>        
        <th>DATE</th>
        
    </tr>
    </thead>';
	$cs=0;
  while($rownew = mysqli_fetch_array($resultdate))
  {
  
  
  
	
 echo "<tr><td> " . $rownew['name1'] . "</td><td>" . $rownew['name2'] . "</td><td>" . $rownew['dateofsuc'] . "</td></tr>";
  $cs++;
  
 
  }
   echo "</table>";
   echo "<br><br><h2>No of records = ".$cs."</h2>";
 echo "\n\n\n\n";
 }
 else if($year=="" && $year1!=""){
 $flag=1;
	$newq = ("SELECT * FROM succ_tab WHERE dateofsuc<= '$year1' ");
	$resultdate = mysqli_query($con,$newq);
	echo '<table class="bordered" >';
   echo '<thead>

    <tr>
         <th>NAME1</th>
		<th>NAME2</th>        
        <th>DATE</th>
        
    </tr>
    </thead>';
	$cs=0;
  while($rownew = mysqli_fetch_array($resultdate))
  {
  
  
  //$ddname = $rownew['dname'];
	//$getsex=$rownew['sex']==1?'M':'F';
	
	$cs++;
  echo "<tr><td> " . $rownew['name1'] . "</td><td>" . $rownew['name2'] . "</td><td>" . $rownew['dateofsuc'] . "</td></tr>";
  
  
 
  }
   echo "</table>";
   echo "<br><br><h2>No of records = ".$cs."</h2>";
 echo "\n\n\n\n";
 }
 else $flag=0;
 if($flag==0){
 // echo $wants;
 if($lang=='' && $rel!=''){
 if($mtype=='')
  $qsch=("SELECT sex,pid,fname,mname,lname, dname, age FROM profile_m WHERE age<='$toage' AND age>='$fromage' AND rlgn='$rel'  ");
 else
   $qsch=("SELECT sex,pid,fname,mname,lname, dname, age FROM profile_m WHERE age<='$toage' AND age>='$fromage' AND rlgn='$rel' AND marital_status='$mtype'  ");
  $resultqsch = mysqli_query($con,$qsch);
  echo '<table class="bordered" >';
   echo '<thead>

    <tr>
        <th>UID</th>
		<th>NAME</th>        
        <th>SEX</th>
        
    </tr>
    </thead>';
	$count = 0;

  while($rown = mysqli_fetch_array($resultqsch))
  {
	
	$ddname = $rown['dname'];
	$getsex=$rown['sex']==1?'M':'F';
	
	
  echo "<tr><td> " . $rown['pid'] . "</td><td>" . $rown['dname'] . "</td><td>" . $getsex . "</td></tr>";
  $count++;
  
  if($rown==NULL) {
  $f=0;
  }
  else $f=1;
  }
  echo "</table>";
 echo "\n\n\n\n";
 
 if($f==0) echo 'Sorry no records found!' ;
 if(!mysqli_query($con,$qsch))
{
 die('Error: ' . mysqli_error($con));
}
 }
 else if($rel=='' && $lang!='')
 {
 if($mtype=='')
 $qsch=("SELECT sex,pid,fname,mname,lname, dname, age FROM profile_m WHERE  age<='$toage' AND age>='$fromage' AND language='$lang'  ");
 else
 $qsch=("SELECT sex,pid,fname,mname,lname, dname, age FROM profile_m WHERE age<='$toage' AND age>='$fromage' AND language='$lang' AND marital_status='$mtype' ");
  $resultqsch = mysqli_query($con,$qsch);
  echo '<table class="bordered" >';
   echo '<thead>

    <tr>
        <th>UID</th>
		<th>NAME</th>        
        <th>SEX</th>
        
    </tr>
    </thead>';
	$count = 0;

  while($rown = mysqli_fetch_array($resultqsch))
  {
  $getsex=$rown['sex']==1?'M':'F';
	
	
	$ddname = $rown['dname'];
	
  echo "<tr><td> " . $rown['pid'] . "</td><td>" . $rown['dname'] . "</td><td>" . $getsex . "</td></tr>";
  $count++;
   if($rown==NULL) {
  $f=0;
  }
  else $f=1;
  }
  echo "</table>";
 echo "\n\n\n\n";
 
 if($f==0) echo 'Sorry no records found!' ;
 if(!mysqli_query($con,$qsch))
{
 die('Error: ' . mysqli_error($con));
}
 }
 else if($lang!='' && $rel!=''){
 if($mtype=='')
  $qsch=("SELECT sex,pid,fname,mname,lname, dname, age FROM profile_m WHERE age<='$toage' AND age>='$fromage' AND rlgn='$rel' AND language='$lang'  ");
 else
   $qsch=("SELECT sex,pid,fname,mname,lname, dname, age FROM profile_m WHERE age<='$toage' AND age>='$fromage' AND rlgn='$rel' AND marital_status='$mtype' AND language='$lang'  ");
  $resultqsch = mysqli_query($con,$qsch);
  echo '<table class="bordered" >';
   echo '<thead>

    <tr>
        <th>UID</th>
		<th>NAME</th>        
        <th>SEX</th>
        
    </tr>
    </thead>';
	$count = 0;

  while($rown = mysqli_fetch_array($resultqsch))
  {
	
	$ddname = $rown['dname'];
	$getsex=$rown['sex']==1?'M':'F';
	
	
  echo "<tr><td> " . $rown['pid'] . "</td><td>" . $rown['dname'] . "</td><td>" . $getsex . "</td></tr>";
  $count++;
  
  if($rown==NULL) {
  $f=0;
  }
  else $f=1;
  }
  echo "</table>";
 echo "\n\n\n\n";
 
 if($f==0) echo 'Sorry no records found!' ;
 if(!mysqli_query($con,$qsch))
{
 die('Error: ' . mysqli_error($con));
}
 }
 else if($mtype=='')
 {
 $qsch=("SELECT sex,pid,fname,mname,lname, dname, age FROM profile_m WHERE age<='$toage' AND age>='$fromage' ");
  $resultqsch = mysqli_query($con,$qsch);
  echo '<table class="bordered" >';
   echo '<thead>

    <tr>
        <th>UID</th>
		<th>NAME</th>        
        <th>SEX</th>
        
    </tr>
    </thead>';
	$count = 0;

  while($rown = mysqli_fetch_array($resultqsch))
  {
  $getsex=$rown['sex']==1?'M':'F';
	
	
	$ddname = $rown['dname'];
	
  echo "<tr><td> " . $rown['pid'] . "</td><td>" . $rown['dname'] . "</td><td>" . $getsex . "</td></tr>";
  $count++;
  
  if($rown==NULL) {
  $f=0;
  }
  else $f=1;
  }
  echo "</table>";
 echo "\n\n\n\n";
 
 if($f==0) echo 'Sorry no records found!' ;
 if(!mysqli_query($con,$qsch))
{
 die('Error: ' . mysqli_error($con));
}
 
 }
 
 else
 {
 $qsch=("SELECT sex,pid,fname,mname,lname, dname, age FROM profile_m WHERE age<='$toage' AND age>='$fromage' AND marital_status='$mtype'");
  $resultqsch = mysqli_query($con,$qsch);
  echo '<table class="bordered" >';
   echo '<thead>

    <tr>
        <th>UID</th>
		<th>NAME</th>        
        <th>SEX</th>
        
    </tr>
    </thead>';
	$count = 0;

  while($rown = mysqli_fetch_array($resultqsch))
  {
	
	$ddname = $rown['dname'];
	$getsex=$rown['sex']==1?'M':'F';
	
  echo "<tr><td> " . $rown['pid'] . "</td><td>" . $rown['dname'] . "</td><td>" . $getsex . "</td></tr>";
  $count++;
  if($rown==NULL) {
  $f=0;
  }
  else $f=1;
  }
  echo "</table>";
 echo "\n\n\n\n";
 
 if($f==0) echo 'Sorry no records found!' ;
   if(!mysqli_query($con,$qsch))
{
 die('Error: ' . mysqli_error($con));
}
 
 }
 echo "<h2>No. of Records = ".$count." </h2>";
 }

 
 


 
 


 mysqli_close($con);
?>
</body>



</html>