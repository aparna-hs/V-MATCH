<!DOCTYPE html>
<html class="html">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.0.314.244"/>
  <title>Your Preference</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?46317016"/>
  <link rel="stylesheet" type="text/css" href="css/master_b-master.css?4231298212"/>
  <link rel="stylesheet" type="text/css" href="css/make-profile.css?4188018611" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>
   </head>
 <body>

  <div class="rgba-background clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu1817-4"><!-- group -->
     <div class="clearfix grpelem" id="u1817-4"><!-- content -->
      <p>Enter your preferences!</p>
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
Preference page
</title>
<script type="text/javascript">
 function usermessage( )
{
 
alert("Preferences Saved");
return true;
 
 
}

function chktext(){
var v1 = document.getElementById("aboutmatch");
var len = v1.value.length;
if(len<10)
{
alert("Enter minimum 10 characters!");
return false;
}
if(len>250)
{
alert("Enter maximum 250 characters!");
return false;
}
}

function chkage()
{
var v2= document.getElementById("toage");
var v1= document.getElementById("fromage");
if(v2.value!="")
if(v1.value > v2.value)
{
alert("Check the age you have entered!");
return false;
}
}
     

</script>
</head>
<body>
<div id="container" style="width:10000px">
<form method="post" name="profile" id="profile" action="fillpref.php" onsubmit="return usermessage();"> 

<table width="750" border="0" align="left" cellpadding="10" cellspacing="2" class="graybox">
<tr> 
	<td class="contentArea">
	
	<table width="750" class="intable1">
		<tr><td>
		<tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr><td>Age range*:</td>
<td align="left"><select name="fromage" id="fromage" style="width:80px"  onchange="javascript:chkage()" required>
<option value=''>-Select-</option>
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
</select>&nbsp;&nbsp;&nbsp; to&nbsp;&nbsp;&nbsp;  <select name="toage" id="toage" style="width:80px" onchange="javascript:chkage()"  required>
<option value=''>-Select-</option>
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
<!-- <option selected="selected" value=''>-Select-</option>   -->
</select>

</td>
<td style="color:red">* fields are mandatory</td>
</tr>


		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		<tr>
			<td>Living:</td>
			<td><input type="radio" name="living" id="indian" value="'0'" onclick="chkindian()" >India &nbsp; &nbsp; &nbsp; <input type="radio" name="living" id= "abroad" value="'1'" onclick="chkindian()" >Abroad 
				&nbsp;<input type="radio" name="living" id="doesnot" value="NULL" checked>Does Not Matter &nbsp; &nbsp; &nbsp;</td>
		</tr>
		
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 	 
		<tr>
			<td>Religion: </td>
			<td><select  name="RELIGION" id="RELIGION"  style="width: 300px;" class="selectfield">
			<option value='' >-Select-</option>
			<option value="Hindu">Hindu</option>
			<option value="Hindu - Brahmin">Hindu - Brahmin</option>
			<option value="Hindu - Vaishya">Hindu - Vaishya</option>
			<option value="Hindu - Kshatriya">Hindu - Kshatriya</option>
			<option value="Muslim - Shia">Muslim - Shia</option>
			<option value="Muslim - Sunni">Muslim - Sunni</option>
			<option value="Muslim - Others">Muslim - Others</option>
			<option value="Christian - Catholic">Christian - Catholic</option>
			<option value="Christian - Orthodox">Christian - Orthodox</option>
			<option value="Christian - Protestant">Christian - Protestant</option>
			<option value="Christian - Others">Christian - Others</option>
			<option value="Sikh">Sikh</option>
			<option value="Jain - Digambar">Jain - Digambar</option>
			<option value="Jain - Shwetambar">Jain - Shwetambar</option>
			<option value="Jain - Others">Jain - Others</option>
			<option value="Parsi">Parsi</option>
			<option value="Buddhist">Buddhist</option>
			<option value="Others">Others</option></select></td>
			</tr>
			
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>Mother Tongue: </td>
			<td> <select name="mothertongue" id="mothertongue" style="width: 300px;" class="selectfield" >
		<option value='' selected>-Select-</option>
		<option value="Arabic">Arabic</option>
		<option value="Assamese">Assamese</option>
		<option value='Awadhi'>Awadhi</option>
		<option value ="Bengali">Bengali</option>
		<option value ="Bihari">Bihari</option>
		<option value ='Chatisgarhi'>Chatisgarhi</option>
		<option value='Dogri'>Dogri</option>
		<option value='English'>English</option>
		<option value="Goanese">Goanese</option>
		<option value="Gujarati">Gujarati</option>
		<option value="Hindi">Hindi</option>
		<option value="Kannada">Kannada</option>
		<option value="Konkani">Konkani</option>
		<option value="Maithili">Maithili</option>
		<option value="Malayalam">Malayalam</option>
		<option value='Manipuri'>Manipuri</option>
		<option value="Marathi">Marathi</option>
		<option value="Marwari">Marwari</option>
		<option value="Oriya">Oriya</option>
		<option value="Punjabi">Punjabi</option>
		<option value="Pushto">Pushto</option>
		<option value="Sanskrit">Sanskrit</option>
		<option value="Sindhi">Sindhi</option>
		<option value="Tamil">Tamil</option>
		<option value="Telugu">Telugu</option>
		<option value="Tulu">Telugu</option>
		<option value="Urdu">Urdu</option>
		<option value="Other">Other</option>

	</select>
</td>
			</tr>
			
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>Education </td>
			<td><select style="width: 300px;" name="EDUCATION" id="EDUCATION" class="selectfield" >
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
			<td>Occupation </td>
			<td><select style="width: 300px;" name="OCCUPATION" id="OCCUPATION" class="selectfield">
<option value=''>-Select-</option>
<optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ADMIN --' class='a' ><option value='49'>&nbsp; Manager</option><option value='48'>&nbsp; Supervisor</option><option value='47'>&nbsp; Officer</option><option value='39'>&nbsp; Administrative Professional</option><option value='50'>&nbsp; Executive</option><option value='46'>&nbsp; Clerk</option><option value='63'>&nbsp; Human Resources Professional</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- AGRICULTURE --' class='a' ><option value='37'>&nbsp; Agriculture & Farming Professional</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- AIRLINE --' class='a' ><option value='30'>&nbsp; Pilot</option><option value='28'>&nbsp; Air Hostess</option><option value='29'>&nbsp; Airline Professional</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ARCHITECT & DESIGN --' class='a' ><option value='19'>&nbsp; Architect</option><option value='20'>&nbsp; Interior Designer</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BANKING & FINANCE --' class='a' ><option value='7'>&nbsp; Chartered Accountant</option><option value='10'>&nbsp; Company Secretary</option><option value='8'>&nbsp; Accounts/Finance Professional</option><option value='16'>&nbsp; Banking Service Professional</option><option value='9'>&nbsp; Auditor</option><option value='69'>&nbsp; Financial Accountant</option><option value='64'>&nbsp; Financial Analyst / Planning</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BEAUTY & FASHION --' class='a' ><option value='25'>&nbsp; Fashion Designer</option><option value='33'>&nbsp; Beautician</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- CIVIL SERVICES --' class='a' ><option value='52'>&nbsp; Civil Services (IAS/IPS/IRS/IES/IFS)</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- DEFENCE --' class='a' ><option value='53'>&nbsp; Army</option><option value='54'>&nbsp; Navy</option><option value='55'>&nbsp; Airforce</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- EDUCATION --' class='a' ><option value='5'>&nbsp; Professor / Lecturer</option><option value='4'>&nbsp; Teaching / Academician</option><option value='6'>&nbsp; Education Professional</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- HOSPITALITY --' class='a' ><option value='34'>&nbsp; Hotel / Hospitality Professional</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- IT & ENGINEERING --' class='a' ><option value='1'>&nbsp; Software Professional</option><option value='2'>&nbsp; Hardware Professional</option><option value='3'>&nbsp; Engineer - Non IT</option><option value='65'>&nbsp; Designer</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- LEGAL --' class='a' ><option value='17'>&nbsp; Lawyer & Legal Professional</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- LAW ENFORCEMENT --' class='a' ><option value='18'>&nbsp; Law Enforcement Officer</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MEDICAL --' class='a' ><option value='12'>&nbsp; Doctor</option><option value='14'>&nbsp; Health Care Professional</option><option value='15'>&nbsp; Paramedical Professional</option><option value='13'>&nbsp; Nurse</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MARKETING & SALES --' class='a' ><option value='42'>&nbsp; Marketing Professional</option><option value='43'>&nbsp; Sales Professional</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MEDIA & ENTERTAINMENT --' class='a' ><option value='27'>&nbsp; Journalist</option><option value='22'>&nbsp; Media Professional</option><option value='24'>&nbsp; Entertainment Professional</option><option value='26'>&nbsp; Event Management Professional</option><option value='21'>&nbsp; Advertising / PR Professional</option><option value='66'>&nbsp; Designer</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MERCHANT NAVY --' class='a' ><option value='32'>&nbsp; Mariner / Merchant Navy</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- SCIENTIST --' class='a' ><option value='35'>&nbsp; Scientist / Researcher</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- TOP MANAGEMENT --' class='a' ><option value='41'>&nbsp; CXO / President, Director, Chairman</option><option value='70'>&nbsp; Business Analyst</option></optgroup><optgroup label='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- OTHERS --' class='a' ><option value='45'>&nbsp; Consultant</option><option value='40'>&nbsp; Customer Care Professional</option><option value='36'>&nbsp; Social Worker</option><option value='51'>&nbsp; Sportsman</option><option value='44'>&nbsp; Technician</option><option value='38'>&nbsp; Arts & Craftsman</option><option value='67'>&nbsp; Student</option><option value='68'>&nbsp; Librarian</option><option value='888' >&nbsp; Not Working</option></optgroup> </select></td>
			</tr>
			
				 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>Annual Income</td>
			<td><select  id="income" name="income" style="width: 300px;" >
			<option name="Income" value=''>-Select-</option>
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
			<td>Marital status of partner </td>
			<td><input type="radio" name="marriage" id="fresher" value="'0'" " >Never married &nbsp; &nbsp; &nbsp; <input type="radio" name="marriage" id="sechand" value="'1'"   >Previously married 
				&nbsp;<input type="radio" name="marriage" id="fresher" value="NULL" checked>Does Not Matter &nbsp; &nbsp; &nbsp;</td>
		</tr>
		<tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		  <tr><td>PARTNER HABITS</td></tr>
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>Diet</td>
			<td><input type="radio" name="diet" value="'0'" >Veg &nbsp; &nbsp;&nbsp;<input type="radio" name="diet" value="'1'" >Non Veg 
				&nbsp;<input type="radio" name="diet" value="NULL" checked>Does Not Matter &nbsp; &nbsp;&nbsp; </td>
		</tr>
		<tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>Smoke:</td>
			<td><input type="radio" name="smoke" value="'0'">No &nbsp; &nbsp;&nbsp;<input type="radio" name="smoke" value="'1'" >Yes &nbsp;;
				&nbsp;<input type="radio" name="smoke" value="NULL" checked>Does Not Matter &nbsp; &nbsp;&nbsp;</td>
			
		</tr>
		<tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>Drink:</td>
			<td><input type="radio" name="drink" value="'0'" > No &nbsp; &nbsp;&nbsp;<input type="radio" name="drink" value="'1'" >Yes &nbsp;
				&nbsp;<input type="radio" name="drink" value="NULL" checked>Does Not Matter &nbsp; &nbsp;&nbsp;</td>
			
		</tr>
		
		<tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr><td>PARTNER PHYSICAL APPEARANCE</td></tr>
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>Complexion</td>
			<td><input type="radio" name="complx" value="fair" onclick="chkcomplx()" >Fair &nbsp; &nbsp;&nbsp;<input type="radio" name="complx" value="wheatish" onclick="chkcomplx()" >Wheatish &nbsp;&nbsp; &nbsp;
			<input type="radio" name="complx" value="dark" onclick="chkcomplx()">Dark&nbsp; &nbsp <input type="radio" name="complx" value=""   checked >Not particular</td>
		</tr>
		<tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>Build</td>
			<td><input type="radio" name="build" value="heavy">Heavy &nbsp; &nbsp;&nbsp;<input type="radio" name="build" value="med">Medium &nbsp;&nbsp; &nbsp;
			<input type="radio" name="build" value="ath">Athletic &nbsp; &nbsp;&nbsp;<input type="radio" name="build" value="slim">Slim</td><td><input type="radio" name="build" value=""   checked >Not particular</td>
		</tr>
		<tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>Height</td>
			<td><input type="radio" name="height" value="tall">Tall &nbsp; &nbsp;&nbsp;<input type="radio" name="height" value="med">Medium &nbsp;&nbsp; &nbsp;
			<input type="radio" name="height" value="short">Short &nbsp;&nbsp; &nbsp;<input type="radio" name="height" value=""   checked >Not particular</td>
		</tr>
		<tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		 <tr>
			<td>Qualities you expect in your partner*: </td>
			<td><textarea rows="4" id="aboutmatch" maxlen="250" name="aboutmatch" cols="40" onchange="chktext()" placeholder="Write a minimum of 10 characters and maximum 250 characters" required></textarea> </td>
		</tr>
		
		
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
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
