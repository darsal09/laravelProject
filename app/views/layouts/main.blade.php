<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title>Authentication App With Laravel 4</title>
	{{HTML::style( 'packages/bootstrap/css/bootstrap.min.css' )}}
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	{{HTML::style( 'css/main.css' )}}
	<!-- Latest compiled and minified CSS -->

   <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">

</head> 
	<body>
		<div class="navbar-wrapper">
			<div class="container">
				<div class="navbar navbar-inverse navbar-static-top" role="navigation">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Darwin Developing</a>
						</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li>{{HTML::link( '/', 'Home')}}</li>
							<li>{{HTML::link('users/register', 'Register&raquo;') }}</li>
							<li>{{HTML::link('users/login', 'Login&raquo;') }}</li>  
							<li>{{HTML::link( 'contact/', 'Contact' )}}</li>
							<li>{{HTML::link( 'services', 'Services' )}}</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li>{{ HTML::link('users/register', 'Register&raquo;') }}</li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li class="divider"></li>
										<li class="dropdown-header">Nav header</li>
										<li><a href="#">Separated link</a></li>
										<li><a href="#">One more separated link</a></li>
									</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>	
	
        @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
        @endif
		
		{{ $content }}
	<div class=container>
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Darwin Developing &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
	</div>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://localhost/laravel/public/packages/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://localhost/laravel/public/packages/bootstrap/js/docs.min.js"></script>
    </body>
</html>