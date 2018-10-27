<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		 <link href="<?php echo base_url()?>/assets/css/form_login.css" rel="stylesheet" type="text/css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		<div class="login-page">
  		<div class="form">
  		<?php echo form_open('login/cekLogin') ?>
    	<form class="login-form">
    	<?php echo validation_errors(); ?>
      	<input type="text" placeholder="username" id="username" name="username"/>
      	<input type="password" placeholder="password" id="password" name="password"/>
      	<button>login</button>
    	</form>
  		</div>
		</div>

		 <!-- jQuery -->
    <script src="<?php echo base_url()?>/assets/theme/home/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>/assets/theme/home/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url()?>/assets/js/creative.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>