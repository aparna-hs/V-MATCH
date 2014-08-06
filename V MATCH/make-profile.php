<!DOCTYPE html>
<html class="html">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.0.314.244"/>
  <title >Your Profile</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?46317016"/>
  <link rel="stylesheet" type="text/css" href="css/master_b-master.css?4231298212"/>
  <link rel="stylesheet" type="text/css" href="css/make-profile.css?4188018611" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>
<?php
session_start();
$con=mysqli_connect("localhost","root","","matrimonial");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
$result=mysqli_query($con,"SELECT * FROM profile_m");
$flag=-1;
$checked="checked";

  while($row = mysqli_fetch_array($result))
  {
  $pid=$row['pid'];
  if($_SESSION['uid']==$pid)
  {
  $flag=1;
$fname=$row['fname'];
$mname=$row['mname'];
$mname=$row['mname'];
$lname=$row['lname'];
$dname=$row['dname'];
$sex=$row['sex'];
$education=$row['education'];
$occupation=$row['occupation'];
$living=$row['living'];
$mstatus=$row['marital_status'];
$sectype=$row['sec_type'];
$kids=$row['kids'];
$age=$row['age'];
$salary=$row['salary'];
$rlgn=$row['rlgn'];
$country=$row['country'];
$state=$row['state'];
$city=$row['city'];
$height=$row['height'];
$build=$row['build'];

$complexion=$row['complexion'];
$smoke=$row['smoke'];
$drink=$row['drink'];
$diet=$row['diet'];
$language=$row['language'];
$aboutme=$row['about_me'];
$phno=$row['phno'];
break;

}
}


?>
   </head>
 <body>

  <div class="rgba-background clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu1817-4"><!-- group -->
     <div class="clearfix grpelem" id="u1817-4"><!-- content -->
      <p align=center>Your Profile!!</p>
     </div>
     <div class="pointer_cursor clearfix grpelem" id="u2046-5"><!-- content -->
      <a class="block" href="index.html"></a>
      <p><a class="nonblock" href="index.html">LOGOUT</a></p>
     </div>
    </div>
    <div class="colelem" id="u2098"><!-- custom html -->
     <html>
<head>
<title>
User Profile page
</title>
<script type="text/javascript">
function usermessage()
{
alert( "Profile Saved");
}
 function cities(dd)
 {
	var selstate = dd.selectedIndex;
	if(selstate.value=="Andhra Pradesh")
	{
		document.getElementById("a_city").disabled  = false;
		}
 }

  function chkbutton(){
    var el = document.getElementById("fresher");
    if(el.checked)
	{
      document.getElementById("2marriage1").disabled = true;
	  document.getElementById("2marriage2").disabled = true;
	  document.getElementById("2marriage3").disabled = true;
	  document.getElementById("2marriage4").disabled = true;
	  }
    else
	{
      document.getElementById("2marriage1").disabled = false;
	  document.getElementById("2marriage2").disabled = false;
	  document.getElementById("2marriage3").disabled = false;
	  document.getElementById("2marriage4").disabled = false;
	  }
      
  }  
   function chkindian(){
    var el = document.getElementById("indian");
    var e2 = document.getElementById("abroad");
    if(el.checked)
	{
      document.getElementById("state").disabled = false;
	  document.getElementById("location").disabled = false;
	  document.getElementById("country").disabled = true;
	  	  }
    else if(e2.checked)
	{
      document.getElementById("state").disabled = true;
	  document.getElementById("country").disabled = false;
	  document.getElementById("location").disabled = true;
	  }
      
  }  

function validate_form2( )
{
 
  var elem = document.forms['profile'].elements['sex']; 
   var len=elem.length-1;
var chkvalue='';
var i;
var defem = "someone@something.com";
var patt = new RegExp(defem);
if ( document.profile.firstname.value == "" )
{
alert ( "Please enter your First Name." );
return false;
}
if ( document.profile.lastname.value == "" )
{
alert ( "Please enter your Last Name." );
return false;
}

if ( document.profile.dispname.value == "" )
{
alert ( "Please enter your Display Name." );
return false;
}
/*for(i=0; i<=len; i++)
{
if(elem[i].checked)chkvalue=elem[i].value;	
}
if(chkvalue=='')
{
alert('Select your Gender.');
return false;
}*/
  if(patt.test(document.profile.emailid.value))
 {
 alert("Enter your email id.");
 return false;
 }
 else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(document.register.emailid.value))  
  {  
    alert("You have entered an invalid email address!")  
    return (false)   
  }  
 if ( document.profile.aboutu.value == "")
{
alert ( "Write about yourself" );
return false;
}
elem = document.forms['profile'].elements['diet']; 
   len=elem.length-1;
chkvalue='';
for(i=0; i<=len; i++)
{
if(elem[i].checked)chkvalue=elem[i].value;	
}
if(chkvalue=='')
{
alert('Select your diet');
return false;
}

elem = document.forms['profile'].elements['build']; 
   len=elem.length-1;
 chkvalue='';
for(i=0; i<=len; i++)
{
if(elem[i].checked)chkvalue=elem[i].value;	
}
if(chkvalue=='')
{
alert('Select your build');
return false;
}


alert("sucessfully Submitted");
alert("Proceed to create your profile!");
return true;
 
 
}
     

</script>
</head>
<body>
<div id="container" style="width:10000px">
<form method="post" name="profile" id="profile" action="fillprofile.php" onsubmit="return usermessage();"> 

<table width="750" border="0" align="left" cellpadding="10" cellspacing="2" class="graybox">
<tr> 
	<td class="contentArea">
	
	<table width="750" class="intable1">
		<tr>
			<td>First Name*:</td>
			<td><input name="firstname" type="text" class="box" id="firstname" value="<?php if(isset($fname)) echo htmlspecialchars($fname); ?>"  size="50" maxlength="40" required></td>
			<td style="color:red;">* fields are mandatory</td>
		</tr>
		
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		<tr>
			<td>Middle Name:</td>
			<td><input name="midname" type="text" class="box" id="midname"  size="50" maxlength="40" value="<?php if(isset($mname)) echo htmlspecialchars($mname); ?>"></td>
		</tr>
		
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		<tr>
			<td>Last Name*:</td>
			<td><input name="lastname" type="text" class="box" id="lastname"  size="50" value="<?php if(isset($lname)) echo htmlspecialchars($lname); ?>" maxlength="40" required></td>
		</tr>
		
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>Display Name:*</td>
			<td><input name="dispname" type="text" class="box" id="dispname"  size="50" maxlength="40" value="<?php if(isset($dname)) echo htmlspecialchars($dname); ?>"required></td>
			
		</tr>
		
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		  
		<tr>
			<td>Date of Birth*:</td>
			<td><input type="date" name="bday" id="bday" required> </td>
		</tr>
		
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 
		 <tr>
			<td>Sex:*</td>
			<td><input type="radio" name="sex" value="1" id="sex1" <?php if(isset($sex)) if($sex==1) print $checked; ?> required>Male &nbsp; &nbsp; &nbsp; <input type="radio" id="sex2" name="sex" value="0" <?php if(isset($sex)) if($sex==0) print $checked; ?> required>Female </td>
			<?php
			?>
		</tr>
		<tr>
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
<td>Age:</td>
<td align="left"><select name="fromage" id="fromage" style="width:50px" >
<option value="1">18</option>
<option value="2">19</option>
<option value="3">20</option>
<option value="4">21</option>
<option selected="selected" value="5">22</option>
<option value="6">23</option>
<option value="7">24</option>
<option value="8">25</option>
<option value="9">26</option>
<option value="10">27</option>
<option value="11">28</option>
<option value="12">29</option>
<option value="13">30</option>
<option value="14">31</option>
<option value="15">32</option>
<option value="16">33</option>
<option value="17">34</option>
<option value="18">35</option>
<option value="19">36</option>
<option value="20">37</option>
<option value="21">38</option>
<option value="22">39</option>
<option value="23">40</option>
<option value="24">41</option>
<option value="25">42</option>
<option value="26">43</option>
<option value="27">44</option>
<option value="28">45</option>
<option value="29">46</option>
<option value="30">47</option>
<option value="31">48</option>
<option value="32">49</option>
<option value="33">50</option>
<option value="34">51</option>
<option value="35">52</option>
<option value="36">53</option>
<option value="37">54</option>
<option value="38">55</option>
<option value="39">56</option>
<option value="40">57</option>
<option value="41">58</option>
<option value="42">59</option>
<option value="43">60</option>
<option value="44">61</option>
<option value="45">62</option>
<option value="46">63</option>
<option value="47">64</option>
<option value="48">65</option>
<option value="49">66</option>
<option value="50">67</option>
<option value="51">68</option>
<option value="52">69</option>
<option value="53">70</option>
<option value="54">71</option>
<option value="55">72</option>
<option value="56">73</option>
<option value="57">74</option>
<option value="58">75</option>
</select><!-- &nbsp;&nbsp;&nbsp; to&nbsp;&nbsp;&nbsp;  <select name="toage" id="toage" style="width:50px">
<option value="1">18</option>
<option value="2">19</option>
<option value="3">20</option>
<option value="4">21</option>
<option value="5">22</option>
<option value="6">23</option>
<option value="7">24</option>
<option value="8">25</option>
<option value="9">26</option>
<option value="10">27</option>
<option value="11">28</option>
<option value="12">29</option>
<option value="13">30</option>
<option value="14">31</option>
<option value="15">32</option>
<option value="16">33</option>
<option value="17">34</option>
<option value="18">35</option>
<option value="19">36</option>
<option value="20">37</option>
<option value="21">38</option>
<option value="22">39</option>
<option value="23">40</option>
<option value="24">41</option>
<option value="25">42</option>
<option value="26">43</option>
<option value="27">44</option>
<option selected="selected" value="28">45</option>
<option value="29">46</option>
<option value="30">47</option>
<option value="31">48</option>
<option value="32">49</option>
<option value="33">50</option>
<option value="34">51</option>
<option value="35">52</option>
<option value="36">53</option>
<option value="37">54</option>
<option value="38">55</option>
<option value="39">56</option>
<option value="40">57</option>
<option value="41">58</option>
<option value="42">59</option>
<option value="43">60</option>
<option value="44">61</option>
<option value="45">62</option>
<option value="46">63</option>
<option value="47">64</option>
<option value="48">65</option>
<option value="49">66</option>
<option value="50">67</option>
<option value="51">68</option>
<option value="52">69</option>
<option value="53">70</option>
<option value="54">71</option>
<option value="55">72</option>
<option value="56">73</option>
<option value="57">74</option>
<option value="58">75</option>
</select>
-->
</td>
</tr>

		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		<tr>
			<td>Living:*</td>
			<td><input type="radio" name="living" id="indian" value="0"   onclick="chkindian()" required>India &nbsp; &nbsp; &nbsp; <input type="radio" name="living" id= "abroad" value="1" onclick="chkindian" required>Abroad </td>
		</tr>
		
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>If abroad, mention country: </td>
			<td><input type="text" name="country" id="country" class="box" size="50" maxlength="20" placeholder="--NA--" > </td>
		</tr>
		
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>State:* </td>
			<td><select  id="state" name="state" style="width: 300px;"  onchange="cities(this.profile.state)" selected=" " required >
			<option name="State" value='' >-Select-</option>
<option value='Andaman and Nicobar Islands'>Andaman and Nicobar Islands</option>
<option value='Andhra Pradesh'>Andhra Pradesh</option>
<option value='Arunachal Pradesh'>Arunachal Pradesh</option>
<option value='Assam'>Assam</option>
<option value='Bihar'>Bihar</option>
<option value='Chandigarh'>Chandigarh</option>
<option value='Chhattisgarh'>Chhattisgarh</option>
<option value='Dadra and Nagar Haveli'>Dadra and Nagar Haveli</option>
<option value='Daman and Diu'>Daman and Diu</option>
<option value='Delhi'>Delhi</option>
<option value='Goa'>Goa</option>
<option value='Gujarat'>Gujarat</option>
<option value='Haryana'>Haryana</option>
<option value='Himachal Pradesh'>Himachal Pradesh</option>
<option value='Jammu and Kashmir'>Jammu and Kashmir</option>
<option value='Jharkhand'>Jharkhand</option>
<option value='Karnataka'>Karnataka</option>
<option value='Kerala'>Kerala</option>
<option value='Lakshadweep'>Lakshadweep</option>
<option value='Madhya Pradesh'>Madhya Pradesh</option>
<option value='Maharashtra'>Maharashtra</option>
<option value='Manipur'>Manipur</option>
<option value='Meghalaya'>Meghalaya</option>
<option value='Mizoram'>Mizoram</option>
<option value='Nagaland'>Nagaland</option>
<option value='Odisha'>Odisha</option>
<option value='Puducherry'>Puducherry</option>
<option value='Punjab'>Punjab</option>
<option value='Rajasthan'>Rajasthan</option>
<option value='Sikkim'>Sikkim</option>
<option value='Tamil Nadu'>Tamil Nadu</option>
<option value='Tripura'>Tripura</option>
<option value='Uttar Pradesh'>Uttar Pradesh</option>
<option value='Uttarakhand'>Uttarakhand</option>
<option value='West Bengal'>West Bengal</option>
</select> </td>
</tr>
<tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>City:*</td>
			<td><input name="location" type="text" class="box" id="location"  size="50" maxlength="40" required></td>
			
		</tr>
		
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 
		<tr>
			<td>Religion:* </td>
			<td><select  name="RELIGION" id="RELIGION"  style="width: 300px;" class="selectfield" required>
			<option value='' >-Select-</option>
			<option value="1">Hindu</option>
			<option value="17">Hindu - Brahmin</option>
			<option value="18">Hindu - Vaishya</option>
			<option value="19">Hindu - Kshatriya</option>
			<option value="10">Muslim - Shia</option>
			<option value="11">Muslim - Sunni</option>
			<option value="2">Muslim - Others</option>
			<option value="12">Christian - Catholic</option>
			<option value="13">Christian - Orthodox</option>
			<option value="14">Christian - Protestant</option>
			<option value="3">Christian - Others</option>
			<option value="4">Sikh</option>
			<option value="15">Jain - Digambar</option>
			<option value="16">Jain - Shwetambar</option>
			<option value="5">Jain - Others</option>
			<option value="6">Parsi</option>
			<option value="7">Buddhist</option>
			<option value="8">Inter-Religion</option>
			<option value="9">No Religious Belief</option>
			</select></td>
			</tr>
			
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>Mother Tongue:* </td>
			<td> <select name="mothertongue" id="mothertongue" style="width: 300px;" class="selectfield" required>
		<option value='' selected>-Select-</option>
		<option value="1">English</option>
		<option value="2">Hindi</option>
		<option value="3">Punjabi</option>
		<option value="4">Urdu</option>
		<option value="5">Arabic</option>
		<option value="6">Assamese</option>
		<option value="7">Awadhi</option>
		<option value="8">Bengali</option>
		<option value="9">Bihari</option>
		<option value="10">Goanese</option>
		<option value="11">Gujarati</option>
		<option value="12">Kannada</option>
		<option value="13">Konkani</option>
		<option value="14">Maithili</option>
		<option value="15">Malayalam</option>
		<option value="16">Marathi</option>
		<option value="17">Marwari</option>
		<option value="18">Oriya</option>
		<option value="19">Other</option>
		<option value="20">Pushto</option>
		<option value="21">Sindhi</option>
		<option value="22">Tamil</option>
		<option value="23">Telugu</option>
		<option value="24">Does not matter</option>

	</select>
</td>
			</tr>
			
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>Education* </td>
			<td><select style="width: 300px;" name="EDUCATION" id="EDUCATION" class="selectfield" required>
<option value=''>-Select-</option>
		<optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Bachelors - Engineering / Computers / Others --'>
<option value='6'>Aeronautical Engineering</option>
<option value='8'>B Arch</option>
<option value='5'>BCA</option>
<option value='49'>BE</option>
<option value='9'>B Plan</option>
<option value='95'>BSc IT / Computer Science</option>
<option value='50'>B Tech</option>
<option value='83'>Other Bachelor Degree</option>
</optgroup>
<optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Masters - Engineering / Computers / Others --'>
<option value='7'>M Arch</option>
<option value='51'>MCA</option>
<option value='53'>ME</option>
<option value='55'>MSc IT / Computer Science</option>
<option value='3'>MS (Engg.)</option>
<option value='54'>M Tech</option>
<option value='52'>PGDCA</option>
<option value='84'>Other Master Degree</option>
</optgroup>
<optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Bachelors - Arts / Science / Commerce / Others --'>
<option value='43'>Aviation Degree</option>
<option value='18'>BA</option>
<option value='16'>B Com</option>
<option value='39'>B Ed</option>
<option value='56'>BFA</option>
<option value='66'>BFT</option>
<option value='57'>BLIS</option>
<option value='59'>BMM (MASS MEDIA)</option>
<option value='17'>BSc</option>
<option value='58'>BSW</option>
<option value='15'>B Phil</option>
<option value='85'>Other Bachelor Degree</option>
</optgroup>
<optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Masters - Arts / Science / Commerce / Others --'>
<option value='13'>MA</option>
<option value='11'>M Com</option>
<option value='38'>M Ed</option>
<option value='98'>MFA</option>
<option value='60'>MLIS</option>
<option value='12'>MSc</option>
<option value='63'>MSW</option>
<option value='10'>M Phil</option>
<option value='86'>Other Master Degree</option>
</optgroup>
<optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Bachelors - Management / Others --'>
<option value='35'>BBA</option>
<option value='65'>BFM (Financial Management)</option>
<option value='19'>BHM (Hotel Management)</option>
<option value='87'>Other Bachelor Degree in Management</option>
</optgroup>
<optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Masters - Management / Others --'>
<option value='61'>MBA</option>
<option value='76'>MFM (Financial Management)</option>
<option value='14'>MHM  (Hotel Management)</option>
<option value='64'>MHRM (Human Resource Management)</option>
<option value='62'>PGDM</option>
<option value='96'>Other Master Degree  in Management</option>
</optgroup>
<optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Bachelors - Medicine - General / Dental / Surgeon / Others --'>
<option value='29'>BAMS</option>
<option value='25'>BDS</option>
<option value='28'>BHMS</option>
<option value='68'>BSMS</option>
<option value='31'>B Pharm</option>
<option value='27'>BPT</option>
<option value='69'>BUMS</option>
<option value='26'>BVSc</option>
<option value='21'>MBBS</option>
<option value='88'>Other Bachelor Degree in Medicine</option>
</optgroup>
<optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Masters - Medicine - General / Dental / Surgeon / Others --'>
<option value='22'>MDS</option>
<option value='20'>MD / MS (Medical)</option>
<option value='30'>M Pharm</option>
<option value='24'>MPT</option>
<option value='23'>MVSc </option>
<option value='97'>Other Master Degree in Medicine</option>
</optgroup>
<optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Bachelors - Legal / Others --'>
<option value='72'>BGL</option>
<option value='73'>BL</option>
<option value='74'>LLB</option>
<option value='90'>Other Bachelor Degree in Legal</option>
</optgroup>
<optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Masters - Legal / Others --'>
<option value='71'>LLM</option>
<option value='70'>ML</option>
<option value='89'>Other Master Degree in  Legal</option>
</optgroup>
<optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Finance - ICWAI / CA / CS/ CFA / Others --'>
<option value='36'>CA</option>
<option value='75'>CFA (Chartered Financial Analyst)</option>
<option value='48'>CS</option>
<option value='37'>ICWA</option>
<option value='91'>Other Degree in Finance</option>
</optgroup>
<optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Service - IAS / IPS / IRS / IES / IFS / Others --'>
<option value='77'>IAS</option>
<option value='80'>IES</option>
<option value='81'>IFS</option>
<option value='79'>IRS</option>
<option value='78'>IPS</option>
<option value='92'>Other Degree in Service</option>
</optgroup>
<optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- PhD --'>
<option value='33'>Ph D</option>
</optgroup>
<optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Diploma / Others --'>
<option value='46'>Diploma</option>
<option value='82'>Polytechnic</option>
<option value='45'>Trade School</option>
<option value='94'>Others in Diploma</option>
</optgroup>
<optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Higher Secondary / Secondary --'>
<option value='47'>Higher Secondary School / High School</option>
</optgroup>
</select> 
</td>
</tr>

 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		<tr>
			<td>Occupation* </td>
			<td><select style="width: 300px;" name="OCCUPATION" id="OCCUPATION" class="selectfield" required>
<option value=''>-Select-</option>
<optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ADMIN --' class='a' ><option value='49'>&nbsp; Manager</option><option value='48'>&nbsp; Supervisor</option><option value='47'>&nbsp; Officer</option><option value='39'>&nbsp; Administrative Professional</option><option value='50'>&nbsp; Executive</option><option value='46'>&nbsp; Clerk</option><option value='63'>&nbsp; Human Resources Professional</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- AGRICULTURE --' class='a' ><option value='37'>&nbsp; Agriculture & Farming Professional</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- AIRLINE --' class='a' ><option value='30'>&nbsp; Pilot</option><option value='28'>&nbsp; Air Hostess</option><option value='29'>&nbsp; Airline Professional</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ARCHITECT & DESIGN --' class='a' ><option value='19'>&nbsp; Architect</option><option value='20'>&nbsp; Interior Designer</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BANKING & FINANCE --' class='a' ><option value='7'>&nbsp; Chartered Accountant</option><option value='10'>&nbsp; Company Secretary</option><option value='8'>&nbsp; Accounts/Finance Professional</option><option value='16'>&nbsp; Banking Service Professional</option><option value='9'>&nbsp; Auditor</option><option value='69'>&nbsp; Financial Accountant</option><option value='64'>&nbsp; Financial Analyst / Planning</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BEAUTY & FASHION --' class='a' ><option value='25'>&nbsp; Fashion Designer</option><option value='33'>&nbsp; Beautician</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- CIVIL SERVICES --' class='a' ><option value='52'>&nbsp; Civil Services (IAS/IPS/IRS/IES/IFS)</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- DEFENCE --' class='a' ><option value='53'>&nbsp; Army</option><option value='54'>&nbsp; Navy</option><option value='55'>&nbsp; Airforce</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- EDUCATION --' class='a' ><option value='5'>&nbsp; Professor / Lecturer</option><option value='4'>&nbsp; Teaching / Academician</option><option value='6'>&nbsp; Education Professional</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- HOSPITALITY --' class='a' ><option value='34'>&nbsp; Hotel / Hospitality Professional</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- IT & ENGINEERING --' class='a' ><option value='1'>&nbsp; Software Professional</option><option value='2'>&nbsp; Hardware Professional</option><option value='3'>&nbsp; Engineer - Non IT</option><option value='65'>&nbsp; Designer</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- LEGAL --' class='a' ><option value='17'>&nbsp; Lawyer & Legal Professional</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- LAW ENFORCEMENT --' class='a' ><option value='18'>&nbsp; Law Enforcement Officer</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MEDICAL --' class='a' ><option value='12'>&nbsp; Doctor</option><option value='14'>&nbsp; Health Care Professional</option><option value='15'>&nbsp; Paramedical Professional</option><option value='13'>&nbsp; Nurse</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MARKETING & SALES --' class='a' ><option value='42'>&nbsp; Marketing Professional</option><option value='43'>&nbsp; Sales Professional</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MEDIA & ENTERTAINMENT --' class='a' ><option value='27'>&nbsp; Journalist</option><option value='22'>&nbsp; Media Professional</option><option value='24'>&nbsp; Entertainment Professional</option><option value='26'>&nbsp; Event Management Professional</option><option value='21'>&nbsp; Advertising / PR Professional</option><option value='66'>&nbsp; Designer</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MERCHANT NAVY --' class='a' ><option value='32'>&nbsp; Mariner / Merchant Navy</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- SCIENTIST --' class='a' ><option value='35'>&nbsp; Scientist / Researcher</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- TOP MANAGEMENT --' class='a' ><option value='41'>&nbsp; CXO / President, Director, Chairman</option><option value='70'>&nbsp; Business Analyst</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- OTHERS --' class='a' ><option value='45'>&nbsp; Consultant</option><option value='40'>&nbsp; Customer Care Professional</option><option value='36'>&nbsp; Social Worker</option><option value='51'>&nbsp; Sportsman</option><option value='44'>&nbsp; Technician</option><option value='38'>&nbsp; Arts & Craftsman</option><option value='67'>&nbsp; Student</option><option value='68'>&nbsp; Librarian</option><option value='888' >&nbsp; Not Working</option></optgroup> </select></td>
			</tr>
			
				 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>Annual Income</td>
			<td><select  id="income" name="income" style="width: 300px;" >
			<option name="Income" value='Select'>-Select-</option>
<option value='upto INR 1 Lakh'>upto INR 1 Lakh</option>
<option value='INR 1 Lakh to INR 2 Lakh'>INR 1 Lakh to INR 2 Lakh</option>
<option value='INR 2 Lakh to INR 5 Lakh'>INR 2 Lakh to INR 5 Lakh</option>
<option value='INR 5 Lakh to INR 10 Lakh'>INR 5 Lakh to INR 10 Lakh</option>
<option value='INR 10 Lakh to INR 20 Lakh'>INR 10 Lakh to INR 20 Lakh</option>
<option value='INR 20 Lakh to INR 50 Lakh'>INR 20 Lakh to INR 50 Lakh</option>
<option value='INR 50 Lakh to INR 1 Crore'>INR 50 Lakh to INR 1 Crore</option>
<option value='Above 1 Crore'>Above 1 Crore</option>
</select> </td>
</tr>
		
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
			
		<tr>
			<td>Previously Married:*</td>
			<td><input type="radio" name="marriage" id="fresher" value="0" onclick="chkbutton()" required>No &nbsp; &nbsp; &nbsp; <input type="radio" name="marriage" id="sechand" value="1"  onclick="chkbutton()" required>Yes </td>
		</tr>
		<tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>If married: </td>
			<tr>
			<td><input type="radio" name="secmarriage" id="2marriage1" value="0">Divorcee &nbsp; &nbsp; &nbsp;</td><td> <input type="radio" name="secmarriage" id= "2marriage2" value="1">Widow/Widower </td></tr><tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
			<tr>
			<td><input type="radio" id= "2marriage3" name="kids" value="0">With kids &nbsp; &nbsp; &nbsp;</td><td> <input type="radio" name="kids" id= "2marriage4" value="1">Without kids </td></tr>
		</tr>
		<tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>Diet*</td>
			<td><input type="radio" name="diet" value="0" required>Veg &nbsp; &nbsp;&nbsp;<input type="radio" name="diet" value="1" required>Non Veg  </td>
		</tr>
		<tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>Smoke:*</td>
			<td><input type="radio" name="smoke" value="0" required>No &nbsp; &nbsp;&nbsp;<input type="radio" name="smoke" value="1" required>Yes &nbsp;&nbsp; &nbsp;</td>
			
		</tr>
		<tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>Drink:*</td>
			<td><input type="radio" name="drink" value="0" required> No &nbsp; &nbsp;&nbsp;<input type="radio" name="drink" value="1" required>Yes &nbsp;&nbsp; &nbsp;</td>
			
		</tr>
		
		<tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>Complexion</td>
			<td><input type="radio" name="complx" value="fair" onclick="chkcomplx()" >Fair &nbsp; &nbsp;&nbsp;<input type="radio" name="complx" value="wheatish" onclick="chkcomplx()" >Wheatish &nbsp;&nbsp; &nbsp;
			<input type="radio" name="complx" value="dark" onclick="chkcomplx()">Dark&nbsp; &nbsp <input type="radio" name="complx" value=""   checked >Don't want to share</td>
		</tr>
		<tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>Build</td>
			<td><input type="radio" name="build" value="heavy">Heavy &nbsp; &nbsp;&nbsp;<input type="radio" name="build" value="med">Medium &nbsp;&nbsp; &nbsp;
			<input type="radio" name="build" value="ath">Athletic &nbsp; &nbsp;&nbsp;<input type="radio" name="build" value="slim">Slim</td><td><input type="radio" name="build" value=""   checked >Don't want to share</td>
		</tr>
		<tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>Height</td>
			<td><input type="radio" name="height" value="tall">Tall &nbsp; &nbsp;&nbsp;<input type="radio" name="height" value="med">Medium &nbsp;&nbsp; &nbsp;
			<input type="radio" name="height" value="short">Short &nbsp;&nbsp; &nbsp;<input type="radio" name="height" value=""   checked >Don't want to share</td>
		</tr>
		<tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>About yourself*: </td>
			<td><textarea rows="4" id="aboutu" maxlen="250" name="aboutu" cols="40" placeholder="Write a minimum of 20 characters and maximum 250 characters" required><?php if(isset($aboutme)) echo $aboutme; ?></textarea> </td>
		</tr>
		
		
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
				 <tr>
			<td>Phone Number:</td>
			<td><input type="tel" name="usrtel" id="usrtel" maxlength="10" ></td>
		</tr>
		
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		
		<tr>
		 <tr cellspacing = "50">
		 <td>&nbsp;</td>
		 </tr>
		
		</tr>
		 
 
	</table>
	
</td>

</tr>
		
		<tr>

			<td>
			<input type="submit"  id = "submit" style="width:350px; height:40px; background-color:#ED1C24; color:#FFFFFF; font-family:Comic Sans Ms; 
			font-size:15pt;" value="UPDATE"/> &nbsp; &nbsp; &nbsp;
			</td>
		</tr>
		 
		

</table>

</form>
</div>
</body>
</html>

</div>
    <div class="verticalspacer"></div>
   </div>
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
