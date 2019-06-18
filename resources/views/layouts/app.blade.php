<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>FrutApp</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/style.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">


</head>

<body>
@if (!Auth::guest())
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">
                <nav class="navbar navbar-inverse">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li><a href="{!! url('/home') !!}" class="navbar-brand"><b>FrutApp</b></a></li>
                     </ul>       
                    <div class="rigth-bar">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                           <a href="{{ url('cart') }}" class="navbar-brand"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                           </li>
                            <li>
                                <a href="#" class="navbar-brand"><b>{!! Auth::user()->name !!}</b></a>
                            </li>
                           <li>
                                <a href="{!! url('/logout') !!}" class="navbar-brand" style="margin-right: 25px;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <b>Salir</b>
                                </a>
                                <form id="logout-form" action="{{ url('/logout') }}"  method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                           
                            </li>

                        </ul>
                     </div>
                
            </nav>
        </header>
    </div>

        <!-- Left side column. contains the logo and sidebar -->
        
        <div class="col-md-2">
            @include('layouts.sidebar')
        </div>
        <!-- Content Wrapper. Contains page content -->
        <div class="col-md-10"> 
              <div>
                  @yield('content')
              </div>
        </div>
    
        <!-- Main Footer -->

    </body>
</html>
@else
     <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">
                <nav class="navbar navbar-inverse">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li><a href="#" class="navbar-brand"><b>FrutApp</b></a></li>
                     </ul>
            <div>
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{!! url('/home') !!}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="{!! url('/login') !!}">Login</a></li>
                    <li><a href="{!! url('/register') !!}">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- jQuery 3.1.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


    @yield('scripts')
</body>
</html>