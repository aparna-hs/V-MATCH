<!DOCTYPE html>
<html class="html">
 <head></head>
 <body background="bg.png">
 
 <div id="container" >

<div id="header" style="background-color:#FFA500;" style="height>

<div id="content" align="center" style="background-color:#EEEEEE;"><h1>
REPORT</h1></div>


</div>
<div id="footer" align="center" style="font-size:20pt;">

  	<?php
	$con=mysqli_connect("localhost","root","","matrimonial");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
 	$result = mysqli_query($con,"SELECT * FROM profile_m");
	$resultsucc = mysqli_query($con,"SELECT count(1) FROM succ_tab");
	$rowsucc = mysqli_fetch_array($resultsucc);
	$totalsucc = $rowsucc[0];
	$total=0;
	$male=0;
	$female=0;
	$first=0;
	$sec=0;
	echo "<table>";

    while($row = mysqli_fetch_array($result))
    {
		$total++;
		if($row['sex']==0)
		$female++;
		else
		$male++;
		if($row['marital_status']==0)
		$first++;
		else
		$sec++;
	}
	
    	echo "<tr>";
  		echo "<td> Total Number of Users</td>";
		echo "<td>&nbsp;&nbsp;</td>";
		echo "<td>" .$total. "</td>";
		echo "</tr>";
		echo "<tr><td> &nbsp; </td></tr>";
		echo "<tr>";
  		echo "<td> Number of Male Users</td>";
		echo "<td>&nbsp;&nbsp;</td>";
		echo "<td>" .$male. "</td>";
		echo "</tr>";
		echo "<tr><td> &nbsp; </td></tr>";
		echo "<tr>";
  		echo "<td> Number of Female Users</td>";
		echo "<td>&nbsp;&nbsp;</td>";
		echo "<td>" .$female. "</td>";
		echo "</tr>";
		echo "<tr><td> &nbsp; </td></tr>";
		echo "<tr>";
  		echo "<td> Number of First timers</td>";
		echo "<td>&nbsp;&nbsp;</td>";
		echo "<td>" .$first. "</td>";
		echo "</tr>";
		echo "<tr><td> &nbsp; </td></tr>";
		echo "<tr>";
  		echo "<td> Total Number of Divorcees/Widowers</td>";
		echo "<td>&nbsp;&nbsp;</td>";
		echo "<td>" .$sec. "</td>";
		echo "</tr>";
		echo "<tr><td> &nbsp; </td></tr>";
		echo "<tr>";
  		echo "<td> Total Number of Marriages</td>";
		echo "<td>&nbsp;&nbsp;</td>";
		echo "<td>" .$totalsucc. "</td>";
		echo "</tr>";
		
		
  	
    
    echo "</table>";

mysqli_close($con);
?>
 	
 	</div>
	<br>
	<br>
 	
	<form method="post" name="formsearch" id="formsearch" action="stats.php" >
	<table class="intable" align="center">
			<tr><td><u><b>CATEGORY BASED REPORTS</b></u></td></tr>
			<tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		<tr>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;Age:</td>
<td><select name="fromage" id="fromage" style="width:80px" >
<option value="0">-Select-</option>

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
</select> &nbsp;&nbsp;&nbsp; to&nbsp;&nbsp;&nbsp;  <select name="toage" id="toage" style="width:80px">
<option value="100">-Select-</option>
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
</select>

</td>
			
		</tr>
<tr>
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
<tr>
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		<tr>
		    <td>&nbsp;&nbsp;&nbsp;&nbsp;Religion</td>
						
			<td><select  name="RELIGION" id="RELIGION"  class="selectfield" >
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
			<option value="Others">Others</option>
						</select>

			</td>
		</tr>
		<tr>
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
<tr>
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		<tr>
		    <td>&nbsp;&nbsp;&nbsp;&nbsp;Language</td>
						
			
			<td> <select name="mothertongue" id="mothertongue"  class="selectfield" >
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
		<tr>
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
<tr>
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		<tr>
		    <td>&nbsp;&nbsp;&nbsp;Married before?</td>
						
			
			<td> <select name="mtype" id="mtype"  class="selectfield" >
		<option value='' selected>-Select-</option>
		<option value="0">No</option>
		<option value="1">Yes</option>
		

	</select>
</td>
		</tr>
		<tr>
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		<tr><td  style = "font-size : 18px" ><b><u>SUCCESS STORIES BY DATE</u></b></td></tr>
		
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		<tr><td>&nbsp;&nbsp;&nbsp; From :   &nbsp;&nbsp;&nbsp;&nbsp;    <input type = "date" name = "fromdate"  ></td></tr>
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		<tr><td>&nbsp;&nbsp;&nbsp; To :  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;    <input type = "date" name = "todate"  ></td></tr>
<tr>
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
<tr>
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		<tr>

			<td><input type="submit"  id = "submit" style="width:75px; height:30px; background-color:#ED1C24; color:#FFFFFF;" value="Generate" > &nbsp; &nbsp; &nbsp;</td></tr>
		
	</table>
    </form>
	<br>
	<br>
	<form name="back" action="admin-home.php" method="post">
	<input type="submit" value="BACK" name="rep" id="sub1">
	</form>
</body>
 
</html>
