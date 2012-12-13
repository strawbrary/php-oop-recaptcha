<html>
  <body>
    <form action="" method="post">
<?php

require_once ("Recaptcha.php");

// Get a key from https://www.google.com/recaptcha/admin/create
$publickey = "";
$privatekey = "";
$recaptcha = new Recaptcha($publickey, $privatekey);

# the response from reCAPTCHA
$resp = null;
# the error code from reCAPTCHA, if any
$error = null;

# was there a reCAPTCHA response?
if ($_POST["recaptcha_response_field"]) {
        $resp = $recaptcha->check_answer($_SERVER["REMOTE_ADDR"],
                                        $_POST["recaptcha_challenge_field"],
                                        $_POST["recaptcha_response_field"]);

        if ($resp->is_valid) {
                echo "You got it!";
        } else {
                # set the error code so that we can display it
                $error = $resp->error;
        }
}
echo $recaptcha->get_html($error);
?>
    <br/>
    <input type="submit" value="submit" />
    </form>
  </body>
</html>
