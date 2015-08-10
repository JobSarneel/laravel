<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>TEST</title>

	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li {{ (Request::is('/') ? 'class=active' : '') }}>		<a href="/">Home</a></li>
					<li {{ (Request::is('register') ? 'class=active' : '') }}> <a href="register">Register</a></li>  
					<li {{ (Request::is('login') ? 'class=active' : '') }}>	<a href="login">Login</a></li>
					<li {{ (Request::is('members') ? 'class=active' : '') }}> <a href="members">Members Only</a></li>  
					<li {{ (Request::is('logout') ? 'class=active' : '') }}> <a href="logout">Logout</a></li>  
				</ul>     				
			</div><!-- /.container-fluid -->
		</nav>

		<div class="jumbotron">
			<h1>@yield('contentHeading')</h1>
			<p>@yield('content')</p>
		</div>

		



	</body>
	</html>
