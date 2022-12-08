<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<?php
		include 'style.php';
		include 'header.html';
	?>
	<script>
	</script>
</head>
<body>
	<br><br><br><br><br><br>
	<?php
		$to = 'albert20699@gmail.com';
		$subject = 'Marriage Proposal';
		$message = 'Hi Jane, will you marry me?'; 
		$from = 'albert20699@gmail.com';
		
		// Sending email
		if(mail($to, $subject, $message)){
			echo 'Your mail has been sent successfully.';
		} else{
			echo 'Unable to send email. Please try again.';
		}
	?>

    <footer>
		<?php
			include 'footer.html';
		?>
    </footer>
</body>
</html>