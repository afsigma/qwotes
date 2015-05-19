<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Qwotes</title>

    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    

	

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

    <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">

  
          

</head>
<body>

	<nav class="blue lighten-1">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Qwotes</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      <ul class="right hide-on-med-and-down">
     

        
          @if (Auth::guest())
            <li><a href="{{ url('/auth/login') }}">Login</a></li>
            <li><a href="{{ url('/auth/register') }}">Register</a></li>
          @else
                <li><a href="{{ url('home') }}">Home</a></li>
                <li><a href="{{ url('settings') }}">Settings</a></li>
                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>

             
          @endif
       
      </ul>
      <ul class="side-nav" id="mobile-demo">
         @if (Auth::guest())
            <li><a href="{{ url('/auth/login') }}">Login</a></li>
            <li><a href="{{ url('/auth/register') }}">Register</a></li>
          @else
            <li><a href="{{ url('home') }}">Home</a></li>
            <li><a href="{{ url('settings') }}">Settings</a></li>
            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
             
          @endif
      </ul>
    </div>
  </nav>

	@yield('content')


  <footer class="page-footer white">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                
              </div>
              
            </div>
          </div>
          <div class="footer-copyright blue lighten-2">
            <div class="container">

            © {{date('Y')}} Copyright
          
            </div>
          </div>
        </footer>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>

  <script>

// Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  $('.collapsible').collapsible();

  $('select').material_select();


	</script>

  

</body>
</html>
