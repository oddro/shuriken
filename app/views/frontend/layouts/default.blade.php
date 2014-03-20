<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title')
			Bootstrap
			@show
		</title>
		<meta name="keywords" content="your, awesome, keywords, here" />
		<meta name="author" content="Oddro" />
		<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />

		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- CSS
		================================================== -->
		<!-- Bootstrap core CSS -->
		<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href="" rel="stylesheet">
		<link href="{{ asset('oddro/css/gravira.css') }}" rel="stylesheet">
		<link href="{{ asset('oddro/js/fancybox/jquery.fancybox.css') }}" rel="stylesheet">

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicons
		================================================== -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}">
		<link rel="apple-touch-icon-precomposed" href="{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}">
		<link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png') }}">
	</head>

	<body>

      <div class="navbar navbar-inverse navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
            	<li {{ (Request::is('/') ? 'class="active"' : '') }}><a href="{{ route('home') }}">Home</a></li>
				<li {{ (Request::is('sticker') ? 'class="active"' : '') }}><a href="{{ URL::to('sticker') }}">Sticker</a></li>
				<li {{ (Request::is('skin') ? 'class="active"' : '') }}><a href="{{ URL::to('skin') }}">Skin</a></li>
				<li {{ (Request::is('gallery') ? 'class="active"' : '') }}><a href="{{ URL::to('gallery') }}">Gallery</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              
              <li><a href="#"><i class="fa fa-shopping-cart"></i> IDR 88000</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#about">Signup</a></li>

            </ul>
          </div>
        </div>
      </div>
			<!-- Navbar 
			<div class="navbar navbar-inverse">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>

						<div class="nav-collapse collapse">
							<ul class="nav">
								<li {{ (Request::is('/') ? 'class="active"' : '') }}><a href="{{ route('home') }}"><i class="icon-home icon-white"></i> Home</a></li>
								<li {{ (Request::is('about-us') ? 'class="active"' : '') }}><a href="{{ URL::to('about-us') }}"><i class="icon-file icon-white"></i> About us</a></li>
								<li {{ (Request::is('contact-us') ? 'class="active"' : '') }}><a href="{{ URL::to('contact-us') }}"><i class="icon-file icon-white"></i> Contact us</a></li>
							</ul>

							<ul class="nav pull-right">
								@if (Sentry::check())

								<li class="dropdown{{ (Request::is('account*') ? ' active' : '') }}">
									<a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="{{ route('account') }}">
										Welcome, {{ Sentry::getUser()->first_name }}
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
										@if(Sentry::getUser()->hasAccess('admin'))
										<li><a href="{{ route('admin') }}"><i class="icon-cog"></i> Administration</a></li>
										@endif
										<li{{ (Request::is('account/profile') ? ' class="active"' : '') }}><a href="{{ route('profile') }}"><i class="icon-user"></i> Your profile</a></li>
										<li class="divider"></li>
										<li><a href="{{ route('logout') }}"><i class="icon-off"></i> Logout</a></li>
									</ul>
								</li>
								@else
								<li {{ (Request::is('auth/signin') ? 'class="active"' : '') }}><a href="{{ route('signin') }}">Sign in</a></li>
								<li {{ (Request::is('auth/signup') ? 'class="active"' : '') }}><a href="{{ route('signup') }}">Sign up</a></li>
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>-->

			<!-- Notifications -->
			@include('frontend/notifications')

			<!-- Content -->
			@yield('content')
      <footer class="footer common">
        <div class="container netra-landing">
          <div class="col-md-12 feedback"></div>
          <div class="col-md-6">
            <ul class="bs-docs-footer-links muted">
              <li><a href="https://github.com/twbs/bootstrap">About Us</a></li>
              <li>·</li>
              <li><a href="../getting-started/#examples">Product Quality</a></li>
              <li>·</li>
              <li><a href="../2.3.2/">FAQ</a></li>
              <li>·</li>
              <li><a href="../about/">About</a></li>
              <li>·</li>
              <li><a href="http://expo.getbootstrap.com">Contact</a></li>
              <li>·</li>
              <li><a href="http://blog.getbootstrap.com">Terms</a></li>
              <li>·</li>
              <li><a href="https://github.com/twbs/bootstrap/issues?state=open">Privacy</a></li>
            </ul>
          </div>
          <div class="col-md-6 copyright">© 2014. Oddro.com. All Rights Reserved</div>
        </div>
      </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script src="{{ asset('oddro/js/netra.js') }}"></script>
	<script src="{{ asset('oddro/js/fancybox/jquery.fancybox.pack.js') }}"></script>

    <script type="text/javascript">
    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
      d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
        $.src='//v2.zopim.com/?1wG4jOOrE8kyD7DN4Idhzau58iQpZMAu';z.t=+new Date;$.
        type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');

        </script>

	</body>
</html>
