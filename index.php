<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Mchat | Online Chat System</title>
		<link rel="stylesheet" type="text/css" href="Style.css"/>
	</head>
	<body>
		<div class="header">
			<h2 style="float:left;">Mchat </h2>
			<h4 style="float:right;">Chat with the people you like</h4>
		</div>
		<div class="menu">
			<a href="index.xhtml">Home</a>
			<a href="#">Login</a>
			<a href="#">Register</a>
		</div>
		<div class="login">
			Email Address : <input type="text" id="username"/><br/>
			Password : <input type="password" id="password"/><br/>
			<input type="Submit" value="Login"/><input type="button" value="Sign in using Facebook"/><input type="button" value="Sign in with Google+" onclick="gapi();"/>
		</div>
	</body>
</html>
