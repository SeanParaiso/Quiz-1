<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
     <form autocomplete="off" action="login.php" method="post">
     	<h2>WELCOME to FITology <br>
			<h4> Please Login to Continue</h4></h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Username</label>
     	<input type="text" name="uname" autocomplete="false"><br>

     	<label>Password</label>
     	<input type="password" name="password"><br>

     	<button type="submit">Login</button>
		 <a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>