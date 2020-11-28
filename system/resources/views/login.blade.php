<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
@include('section-admin.assets')
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Sign In Now</h2>
	@include('utils.notif')
		<form action="{{url('login')}}" method="post">
			@csrf
			<input type="email" class="ggg" name="email" placeholder="E-MAIL" required>
			<input type="password" class="ggg" name="password" placeholder="PASSWORD" required>


			<span><input type="checkbox" />Remember Me</span>
			<h6><a href="#">Forgot Password?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
		<p>Don't Have an Account ?<a href="registration.html">Create an account</a></p>
</div>
</div>
@include('section-admin.js')
</body>
</html>
