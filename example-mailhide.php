<html><body>
<?php

require_once ("Recaptcha.php");

// get a key at http://www.google.com/recaptcha/mailhide/apikey
$mailhide_pubkey = "";
$mailhide_privkey = "";
$recaptcha = new Recaptcha($mailhide_pubkey, $mailhide_privkey);
?>

The Mailhide version of example@example.com is
<?php echo $recaptcha->mailhide_html("example@example.com"); ?>. <br>

The url for the email is:
<?php echo $recaptcha->mailhide_url("example@example.com"); ?> <br>

</body></html>
