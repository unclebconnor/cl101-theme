<?php /* Template Name: process-form */ ?>

<?php 

	if (isset($_POST['submit'])){
		$url= '<?php print home_url(); ?>';
		wp_redirect($url);
		exit;
		$to = 'developer@clubbing101.com';
		$subject = 'Your email form works go to bed';
		$message = 'derp da derp test' . $_POST['email'];
		$headers = "from: developer@clubbing101.com\r\n";
		// $headers .= 'Content-Type: text/plain; charset=utf-8';
		// $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
		// if ($email) {
		// 	$headers .= "\r\nReply-To: $email";
		// }
		$success = mail($to, $subject, $message, $headers);
	}
	
?>

<div>YER HERE</div>

