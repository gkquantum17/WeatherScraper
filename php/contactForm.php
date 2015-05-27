

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	.emailForm{
		border: 1px solid grey;
		border-radius: 10px; 
		margin-top: 20px; 
	}
	form {
		padding-bottom: 20px; 
	}
	</style>
  </head>
  <body>

  <?php
		/*$emailTo = "gokulk@live.com";
		$subject="I hope this works!"; 
		$body = "I think you're awesome";
		$headers="From: gkquantum17@gmail.com"; 
		
		mail($emailTo, $subject, $body, $headers);*/
		
		if ($_POST["submit"]){
			$errorCount = 0; 
			if (!$_POST['name']){
				$error.="<br />Please enter your name"; 
			}
			if (!$_POST['email']){
				$error.="<br />Please enter your email"; 
			}
			if (!$_POST['message']){
				$error.="<br />Please enter your message"; 
			}
			
			if ($POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
				$error.="<br />Please enter a valid email address"; 
			} 
			if ($error){
				$result = '<div class = "alert alert-danger"> <strong> There were 
				error(s) in your form:</strong>  '.$error.' </div>';
			} else{
				if (mail("gokulk@live.com", "Commment from website!", "Name: ".$_POST['name']."
				Email: ".$_POST['email']."Comment: ".$_POST['message'])){
					$result = '<div class = "alert alert-success"> <strong> Thank you for your message!
					</strong></div>';
				} else {
					$result = '<div class = "alert alert-success"> <strong> Sorry, there was an error 
					sending your message. Please try again later. </strong></div>';
				}
			}
		}
	?>
	
	<div class = "container">
		<div class = "row">
			<div class = "col-md-6 col-md-offset-3 box emailForm">
			
			<h1> My Email Form </h1>
			<?php echo $result; ?>
			<p class = "lead"> Please get in touch - I'll get back go you as soon as I can. </p>
			<form method = "post">
				<div class = "form-group">
					<label for = "name"> Your Name: </label>
					<input type ="text" name = "name" class = "form-control" placeholder = "Enter your name here..."
					value = "<?php echo $_POST['name']; ?>"/>
				</div>
				<div class = "form-group">
					<label for = "email"> Your Email: </label>
					<input type ="email" name = "email" class = "form-control" placeholder = "Enter your email here..." 
					value = "<?php echo $_POST['email']; ?>"/>
				</div>
					<div class = "form-group">
					<label for = "message"> Your Message: </label>
					<textarea name = "message" class = "form-control" placeholder = "Enter your message here..." ><?php echo $_POST['message']; ?></textarea>
				</div>
				<input type = "submit" name = "submit" class = "btn btn-success" value = "Submit" />
			</form>
			</div>
		</div>
	<div>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>