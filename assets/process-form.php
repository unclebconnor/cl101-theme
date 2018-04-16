<?php 
	if (count($_POST)>0){
		$to = 'developer@clubbing101.com';
		$subject = 'A contact form has been submitted';
		$message = '';
		foreach ($_POST as $key => $value){$message .= "${key}: ${value}</br>";};
		// $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
		print($message);
		wp_mail( $to, $subject, $message);
		wp_redirect($_POST['redirect-url']); exit;
	}	
?>




