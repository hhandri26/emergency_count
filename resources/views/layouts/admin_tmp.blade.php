<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Welcome To Emergency Count Absen</title>

    <!-- Bootstrap Core CSS -->
    <link rel="shortcut icon" href="{{asset('public/img/unilever_logo.png')}}">
    <link href="{{asset('public/ui/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('public/ui/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('public/ui/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('public/ui/css/4-col-portfolio.css')}}" rel="stylesheet">
    <!-- jQuery -->
    <script src="{{asset('public/ui/js/jquery.js')}}"></script>
    <!-- data tabel -->
    <link href="{{asset('public/ui/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/ui/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <!-- sweet alert -->
    <link href="{{asset('public/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
    <!-- fab button -->
    <link href="{{asset('public/fab/css/jquery-fab-button.min.css')}}" rel="stylesheet">
        
    

      <style type="text/css">
      .bg {
           width: 100%;
           height: 100%;
           position: fixed;
           z-index: -1;
           float: left;
           left: 0;
           margin-top: -20px;
      }
      .bg_row{
        background-color:white;
        padding: 30px;
        border-radius: 30px;
      }
      </style>
</head>

<body>
<img src="{{asset('public/img/left-mask1_blue.png')}}" alt="gambar" class="bg" />
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          <i class="fa fa-sign-out pull-right"></i> Logout
                      </a>  
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                      </form>
                    </li>
                </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color:#fcc;">Welcome to
                    <small>Emergency Count Absen</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
	    <div class="mainbody-section text-center">
          @yield('content')         
        </div>
    </div>
	
    <!-- /.container -->
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('public/ui/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/ui/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('public/ui/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/fab/js/jquery-fab-button.min.js')}}"></script>
    <script src="{{asset('public/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
    <script src="{{asset('public/costum/alert.js')}}"></script>
    <script src="{{asset('public/costum/globalscript.js')}}"></script>

</body>

</html>
