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
  $numid = $_SESSION['uid'];
  $mycheck = $_POST["namesch"];
  if($mycheck==0)
  {
   $nmoperson=$_POST['namesearch'];
   
$f=0;
$curuid = $_SESSION['uid'];

  $nsch=("SELECT pid,fname,mname,lname, dname, age FROM profile_m WHERE (fname LIKE '%$nmoperson%') OR (lname LIKE '%$nmoperson%') ");
  $resnsch = mysqli_query($con,$nsch);
  echo '<table class="bordered" >';
   echo '<thead>

    <tr>
        <th>NAME</th>
		<th>DISPLAY NAME</th>        
        <th>AGE</th>
        <th>VIEW</th>
    </tr>
    </thead>';
	$count = 0;

  while($rown = mysqli_fetch_array($resnsch))
  {
	$rown['age']=$rown['age']+'17';
	$ddname = $rown['dname'];
	if($curuid!=$rown['pid']){
  echo "<tr><td> " . $rown['fname'] . "&nbsp;&nbsp;" . $rown['lname'] . "</td><td>" . $rown['dname'] . "</td><td>" . $rown['age'] . " </td><td><form name=".'$count'." id='vp' method='post' action='view-profile.php'> <input type='hidden' name='dusrname' value='".$ddname."'> <button type='submit'> View profile  </form></td></tr>";
  $count++;
  }
  if($rown==NULL) {
  $f=0;
  }
  else $f=1;
  }
  echo "</table>";
 echo "\n\n\n\n";
 
 if($f==0) echo 'Sorry no matches found!' ;
if(!mysqli_query($con,$nsch))
{
 die('Error: ' . mysqli_error($con));
}

}
else{

$toage=$_POST['toage'];
  $fromage=$_POST['fromage'];
  $rel=$_POST['RELIGION'];
  $lang=$_POST['mothertongue'];
  $mtype=$_POST['mtype'];
  $f=0;
  $gender=("SELECT sex FROM profile_m WHERE pid='$numid'  ");
  $resgen = mysqli_query($con,$gender);
  $rgen = mysqli_fetch_array($resgen);
  $sex = $rgen['sex'];
  $wants=($sex==1)?0:1;
  $count=0;
 // echo $wants;
 if($lang=='' && $rel!=''){
 if($mtype=='')
  $qsch=("SELECT pid,fname,mname,lname, dname, age FROM profile_m WHERE sex='$wants' AND age<='$toage' AND age>='$fromage' AND rlgn='$rel'  ");
 else
   $qsch=("SELECT pid,fname,mname,lname, dname, age FROM profile_m WHERE sex='$wants' AND age<='$toage' AND age>='$fromage' AND rlgn='$rel' AND marital_status='$mtype'  ");
  $resultqsch = mysqli_query($con,$qsch);
  echo '<table class="bordered" >';
   echo '<thead>

    <tr>
        <th>NAME</th>
		<th>DISPLAY NAME</th>        
        <th>AGE</th>
        <th>VIEW</th>
    </tr>
    </thead>';
	$count = 0;

  while($rown = mysqli_fetch_array($resultqsch))
  {
	$rown['age']=$rown['age']+'17';
	$ddname = $rown['dname'];
	if($numid!=$rown['pid']){
  echo "<tr><td> " . $rown['fname'] . "&nbsp;&nbsp;" . $rown['lname'] . "</td><td>" . $rown['dname'] . "</td><td>" . $rown['age'] . " </td><td><form name=".'$count'." id='vp' method='post' action='view-profile.php'> <input type='hidden' name='dusrname' value='".$ddname."'> <button type='submit'> View profile  </form></td></tr>";
  $count++;
  }
  if($rown==NULL) {
  $f=0;
  }
  else $f=1;
  }
  echo "</table>";
 echo "\n\n\n\n";
 
 if($f==0) echo 'Sorry no matches found!' ;
 if(!mysqli_query($con,$qsch))
{
 die('Error: ' . mysqli_error($con));
}
 }
 else if($rel=='' && $lang!='')
 {
 if($mtype=='')
 $qsch=("SELECT pid,fname,mname,lname, dname, age FROM profile_m WHERE sex='$wants' AND age<='$toage' AND age>='$fromage' AND language='$lang'  ");
 else
 $qsch=("SELECT pid,fname,mname,lname, dname, age FROM profile_m WHERE sex='$wants' AND age<='$toage' AND age>='$fromage' AND language='$lang' AND marital_status='$mtype' ");
  $resultqsch = mysqli_query($con,$qsch);
  echo '<table class="bordered" >';
   echo '<thead>

    <tr>
        <th>NAME</th>
		<th>DISPLAY NAME</th>        
        <th>AGE</th>
        <th>VIEW</th>
    </tr>
    </thead>';
	$count = 0;

  while($rown = mysqli_fetch_array($resultqsch))
  {
	$rown['age']=$rown['age']+'17';
	$ddname = $rown['dname'];
	if($numid!=$rown['pid']){
  echo "<tr><td> " . $rown['fname'] . "&nbsp;&nbsp;" . $rown['lname'] . "</td><td>" . $rown['dname'] . "</td><td>" . $rown['age'] . " </td><td><form name=".'$count'." id='vp' method='post' action='view-profile.php'> <input type='hidden' name='dusrname' value='".$ddname."'> <button type='submit'> View profile  </form></td></tr>";
  $count++;
  }
  if($rown==NULL) {
  $f=0;
  }
  else $f=1;
  }
  echo "</table>";
 echo "\n\n\n\n";
 
 if($f==0) echo 'Sorry no matches found!' ;
 if(!mysqli_query($con,$qsch))
{
 die('Error: ' . mysqli_error($con));
}
 }
 else if($rel!='' && $lang!='')
 {
 if($mtype=='')
 $qsch=("SELECT pid,fname,mname,lname, dname, age FROM profile_m WHERE sex='$wants' AND age<='$toage' AND age>='$fromage' AND language='$lang' AND rlgn='$rel' ");
 else
 $qsch=("SELECT pid,fname,mname,lname, dname, age FROM profile_m WHERE sex='$wants' AND age<='$toage' AND age>='$fromage' AND language='$lang' AND marital_status='$mtype' AND rlgn='$rel'");
  $resultqsch = mysqli_query($con,$qsch);
  echo '<table class="bordered" >';
   echo '<thead>

    <tr>
        <th>NAME</th>
		<th>DISPLAY NAME</th>        
        <th>AGE</th>
        <th>VIEW</th>
    </tr>
    </thead>';
	$count = 0;

  while($rown = mysqli_fetch_array($resultqsch))
  {
	$rown['age']=$rown['age']+'17';
	$ddname = $rown['dname'];
	if($numid!=$rown['pid']){
  echo "<tr><td> " . $rown['fname'] . "&nbsp;&nbsp;" . $rown['lname'] . "</td><td>" . $rown['dname'] . "</td><td>" . $rown['age'] . " </td><td><form name=".'$count'." id='vp' method='post' action='view-profile.php'> <input type='hidden' name='dusrname' value='".$ddname."'> <button type='submit'> View profile  </form></td></tr>";
  $count++;
  }
  if($rown==NULL) {
  $f=0;
  }
  else $f=1;
  }
  echo "</table>";
 echo "\n\n\n\n";
 
 if($f==0) echo 'Sorry no matches found!' ;
 if(!mysqli_query($con,$qsch))
{
 die('Error: ' . mysqli_error($con));
}
 
 }
 else if($mtype=='')
 {
 $qsch=("SELECT pid,fname,mname,lname, dname, age FROM profile_m WHERE sex='$wants' AND age<='$toage' AND age>='$fromage' ");
  $resultqsch = mysqli_query($con,$qsch);
  echo '<table class="bordered" >';
   echo '<thead>

    <tr>
        <th>NAME</th>
		<th>DISPLAY NAME</th>        
        <th>AGE</th>
        <th>VIEW</th>
    </tr>
    </thead>';
	$count = 0;

  while($rown = mysqli_fetch_array($resultqsch))
  {
	$rown['age']=$rown['age']+'17';
	$ddname = $rown['dname'];
	if($numid!=$rown['pid']){
  echo "<tr><td> " . $rown['fname'] . "&nbsp;&nbsp;" . $rown['lname'] . "</td><td>" . $rown['dname'] . "</td><td>" . $rown['age'] . " </td><td><form name=".'$count'." id='vp' method='post' action='view-profile.php'> <input type='hidden' name='dusrname' value='".$ddname."'> <button type='submit'> View profile  </form></td></tr>";
  $count++;
  }
  if($rown==NULL) {
  $f=0;
  }
  else $f=1;
  }
  echo "</table>";
 echo "\n\n\n\n";
 
 if($f==0) echo 'Sorry no matches found!' ;
 if(!mysqli_query($con,$qsch))
{
 die('Error: ' . mysqli_error($con));
}
 
 }
 
 else
 {
 $qsch=("SELECT pid,fname,mname,lname, dname, age FROM profile_m WHERE sex='$wants' AND age<='$toage' AND age>='$fromage' AND marital_status='$mtype'");
  $resultqsch = mysqli_query($con,$qsch);
  echo '<table class="bordered" >';
   echo '<thead>

    <tr>
        <th>NAME</th>
		<th>DISPLAY NAME</th>        
        <th>AGE</th>
        <th>VIEW</th>
    </tr>
    </thead>';
	$count = 0;

  while($rown = mysqli_fetch_array($resultqsch))
  {
	$rown['age']=$rown['age']+'17';
	$ddname = $rown['dname'];
	if($numid!=$rown['pid']){
  echo "<tr><td> " . $rown['fname'] . "&nbsp;&nbsp;" . $rown['lname'] . "</td><td>" . $rown['dname'] . "</td><td>" . $rown['age'] . " </td><td><form name=".'$count'." id='vp' method='post' action='view-profile.php'> <input type='hidden' name='dusrname' value='".$ddname."'> <button type='submit'> View profile  </form></td></tr>";
  $count++;
  }
  if($rown==NULL) {
  $f=0;
  }
  else $f=1;
  }
  echo "</table>";
 echo "\n\n\n\n";
 
 if($f==0) echo 'Sorry no matches found!' ;
 if(!mysqli_query($con,$qsch))
{
 die('Error: ' . mysqli_error($con));
}
 
 }
 
 


 
 
if(!mysqli_query($con,$gender))
{
 die('Error: ' . mysqli_error($con));
}

}
 mysqli_close($con);
?>
</body>



</html>