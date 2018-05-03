<?php 
	echo '<body style="background-color:#FFFFFF">';
	if (count($_POST)>0){
		$to = 'submissions@clubbing101.com';
		$subject = 'A contact form has been submitted';
		$message = '';
		$headers = "From: ${_POST['email']}";
		foreach ($_POST as $key => $value){$message .= "${key}: ${value} \r\n";};
		mail( $to, $subject, $message, $headers);
	}	
?>

<script>window.location.replace('<?php print $_POST['redirect-url']?>');</script>