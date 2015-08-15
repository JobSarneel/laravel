<html>
<head>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<!--[if lte IE 8]>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
    <!--<![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <style>
    p,a,h1,h3,ul,form {
    	font-family: 'Lato', sans-serif;	
    }

    p {
    	text-align: justify;
    }
    
    .l-box {
        padding: 1em;
        height: 0em;
    }

    .pure-menu-disabled .pure-menu-link:hover {
    	background-color: transparent;
    }

    .pure-menu-active > .pure-menu-link,
    .pure-menu-link:hover,
    .pure-menu-link:focus {
    	background-color: transparent;
	}
	</style>
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TEST</title>
</head>

<body>
	<div class="pure-g-r">
		<div class="pure-u-1-5"><div class="l-box"></div></div>

		<div class="pure-u-3-5">
			<div class="l-box">
				<div class="pure-menu pure-menu-horizontal">
					<ul class="pure-menu-list">
						@if (Auth::guest())
						<li class="pure-menu-item {{ (Request::is('/') ? 'pure-menu-selected' : '') }}"><a href="/" class="pure-menu-link">Home</a></li>
						<li class="pure-menu-item {{ (Request::is('register') ? 'pure-menu-selected' : '') }}"><a href="auth/register" class="pure-menu-link">Register</a></li>
						<li class="pure-menu-item {{ (Request::is('login') ? 'pure-menu-selected' : '') }}"><a href="auth/login" class="pure-menu-link">Login</a></li>
						@else
						<li class="pure-menu-item {{ (Request::is('members') ? 'pure-menu-selected' : '') }}"><a href="members" class="pure-menu-link">Members Only</a></li>
						<li class="pure-menu-item {{ (Request::is('logout') ? 'pure-menu-selected' : '') }}"><a href="/auth/logout" class="pure-menu-link">Logout</a></li>
						@endif
					</ul>
				</div>
			</div>
		</div> 

		<div class="pure-u-1-5"><div class="l-box"></div></div>
	</div>

		<div class="pure-g-r">
		<div class="pure-u-1-5"><div class="l-box"></div></div>

		<div class="pure-u-3-5">
			{{-- <div class="l-box"> --}}
				<h1>@yield("contentHeading")</h1>
				@yield("content")

			{{-- </div> --}}
		</div> 

		<div class="pure-u-1-5"><div class="l-box"></div></div>
	</div>		

	
</body>
</html>