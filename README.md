PHP Object-Oriented reCAPTCHA
================
The PHP reCAPTCHA library encapsulated in a class to simplify usage with frameworks that support autoloading.

Generating Captcha
------------------
```php
$recaptcha = new Recaptcha($publicKey, $privateKey);
$recaptcha->get_html();
```

Validating Response
-------------------
```php
$recaptcha = new Recaptcha($publicKey, $privateKey);
$response = $recaptcha->check_answer($_SERVER['REMOTE_ADDR'], $_POST['recaptcha_challenge_field'], $_POST['recaptcha_response_field']);

if ($response->is_valid) {
	// Captcha was completed successfully
} else {
	// Captcha was not completed successfully
}
```

The reCAPTCHA PHP Lirary helps you use the reCAPTCHA API. Documentation
for this library can be found at

	http://recaptcha.net/plugins/php