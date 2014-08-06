<!DOCTYPE html>
<html class="html">
<?php
$pid=$_POST["pid"];
?>
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.0.314.244"/>
  <title>Express Interest</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?46317016"/>
  <link rel="stylesheet" type="text/css" href="css/master_b-master.css?4231298212"/>
  <link rel="stylesheet" type="text/css" href="css/express-interest.css?3832966886" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>
   </head>
 <body>

  <div class="rgba-background clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu2179-4"><!-- group -->
     <div class="clearfix grpelem" id="u2179-4"><!-- content -->
      <p>Express Interest</p>
     </div>
     <div class="pointer_cursor clearfix grpelem" id="u2046-5"><!-- content -->
      <a class="block" href="index.html"></a>
      <p><a class="nonblock" href="index.html">LOGOUT</a></p>
     </div>
    </div>
    <div class="colelem" id="u2177"><!-- custom html -->
     <html>
<head>


<script>
function validateForm()
{
   

if(document.contactus.message.value.length < 10 ) 
         {      
        alert("Enter atleast 10 characters!");
              
        return false;    }
alert("Interest Expressed!");
}
</script>
</head>
<body>
<div id="container" style="width:1000px">
<table width="750" border="0" align="left" cellpadding="0" cellspacing="1" class="graybox">

	<td class="contentArea"> <form method="post" action="interest.php" name="contactus" id="contactus" onsubmit="return validateForm();" >
	<table width="350" class="intable">

<tr>
	<td>Enter Message Here</td>
</tr>

<tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
<tr>
<td><textarea name="message" id="message" rows="7" cols="30" > </textarea>
		</td></tr>
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		</tr>
<tr>
		 <tr cellspacing = "1">
		 <td>&nbsp;</td>
		 </tr>
		<tr><td>
<input type="hidden" name="pid" value="<?php echo $pid; ?>" />

</td></tr>

			<td><input type="submit"  id = "submit" style="width:197px; height:20px; background-color:#ED1C24; color:#FFFFFF;" value="Submit"/> &nbsp; &nbsp; &nbsp;</td>

</tr>

		
	</table>
</form></td>
</tr>

</table>
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
