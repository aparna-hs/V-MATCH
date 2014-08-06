<html>
<?php
///subscribe form
  $recipient = "hs.aparna.blr@gmail.com"; ///  Your Email address
  $subject = 'Query asked on V Match ( Non Member )';
  $message = 'From : '.$_POST["name"].'Email: '.$_POST["userEmail"].
  'Message: '.$_POST["message"]
  ;
  
  
  mail("$recipient", $subject,
  $message, "From:" . $recipient);
 
 ?>
  <form id="form" action="contact-us.html" method="POST">

</form>
<script>
document.getElementById("form").submit();
</script>
</html>
