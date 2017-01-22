<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Fb Login</title>
</head>
<body> Welcome 
<script type="text/javascript" src="./fbapp/fb.js"></script>
<?php if(isset($_SESSION["name"])) {echo $_SESSION["name"]; } ?>
<?php if(isset($_SESSION["name"])) { } else { ?><div class="fb-login-button" data-scope="public_profile,email" onlogin="checkLoginState();"></div>
<?php } ?>

</body>
</html>