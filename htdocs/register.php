<html>
<head>
<title> Register | JADE</title>
<link rel="stylesheet" type="text/css" href="styles/login.css">

</head>
<body>
<!--INPUT: USRNAME & PASSWORD; Handled by LOGIN_HANDLER-->
<div id="registrationbox">
<h3>Register for JADE</h3>
<form action="/handlers/registration_handler.php" method="POST">
<input type="text" required name="usrname" placeholder="username" >
<br>
<input type="email" required name="email" placeholder="email" >
<br>
<input type="password" required name="passwd" placeholder="password">
<br>
<input type="password" required name="confirm" placeholder="confirm password">
<br>
<input type="date" required name="bday" placeholder="birth date" >
<br>
<input type="radio" name="gender" value="male">Male<br>
<input type="radio" name="gender" value="female"> Female<br>
<br>
<INPUT TYPE="submit" value="Log in">
</form>
</div>

<!--Should not use FORM as a link!!!!-->
<div id="registerbox">
<h3>Already have an account?</h3>
<form action="login.php" method"POST">
<INPUT TYPE="submit" value="Login to JADE">
</form>
</div>
</body>
</html>