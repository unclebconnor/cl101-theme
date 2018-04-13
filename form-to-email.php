<?php 
	if (isset($_POST['submit'])){
		$to = 'bc.boxomail@gmail.com';
		$subject = 'Your email form works go to bed';
		$message = 'derp da derp ' . $_POST['email'];
		$headers = "from: webmaster@clubbing101.com\r\n";
		$headers .= 'Content-Type: text/plain; charset=utf-8';
		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
		if ($email) {
			$headers .= "\r\nReply-To: $email";
		}
		$success = mail($to, $subject, $message, $headers, '-fbc.boxomail@gmail.com');
	}
?>

<?php get_header(); ?>

<?php get_template_part('page-header'); ?>

<div class="page-content main-img"> <!-- Begin Content Container - Closed in Footer-->
    <div class="container content-area">
        <div class="columns">
            <div>  
                <?php if(isset($success) && $success) { ?>
					<h1>SUCCESS</h1>
				<?php } else { ?>
					<h1>OOPS</h1>
				<?php } ?>
				?>
            </div> <!-- page-main -->
        </div>  <!-- /.row -->   
    </div>
    
<?php get_footer(); ?>

