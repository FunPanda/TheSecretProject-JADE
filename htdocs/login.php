
<html>
<head>
<title> Login | JADE</title>
<link rel="stylesheet" type="text/css" href="styles/login.css">

</head>
<body>
<!--INPUT: USRNAME & PASSWORD; Handled by LOGIN_HANDLER-->
<div id="loginbox">
<h3>Log in to JADE</h3>
<form action="/handlers/login_handler.php" method="POST">
<input type="text" required name="usrname" placeholder="username" >
<br>
<input type="password" required name="passwd" placeholder="password">
<br>
<INPUT TYPE="submit" value="Log in">
</form>
</div>

<!--Should not use FORM as a link!!!!-->
<div id="registerbox">
<h3>Don't have an account?</h3>
<form action="registration.php" method"POST">
<INPUT TYPE="submit" value="Register for JADE">
</form>
</div>
</body>
</html>

