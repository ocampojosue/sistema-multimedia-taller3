<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
   <title>{{env('APP_NAME')}}</title>
   <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
   <link rel="icon" href="/escudo.ico" type="image/x-icon">
   <script src="{{asset('assets/js/loader.js')}}"></script>
   
   <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
   <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
   @yield('styles')

</head>
<body class="dashboard-analytics">

    <!-- BEGIN LOADER -->
   <div id="load_screen">
      <div class="loader">
         <div class="loader-content">
         <div class="spinner-grow align-self-center"></div>
         </div>
      </div>
   </div>
   <!--  END LOADER -->

   <!--  BEGIN NAVBAR  -->
   @include('layouts.theme.navbar')
   <!--  END NAVBAR  -->

   <!--  BEGIN MAIN CONTAINER  -->
   <div class="main-container" id="container">

      <div class="overlay"></div>
      <div class="search-overlay"></div>

      <!--  BEGIN SIDEBAR  -->
      @include('layouts.theme.sidebar')
      <!--  END SIDEBAR  -->

      <!--  BEGIN CONTENT AREA  -->
      <div id="content" class="main-content">
            <div class="layout-px-spacing">
               @yield('content')
            </div>

            @include('layouts.theme.footer')
      </div>
      <!--  END CONTENT AREA  -->

   </div>
   <!-- END MAIN CONTAINER -->

   <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
   <script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
   <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
   <script src="{{asset('assets/js/app.js')}}"></script>
   <script>
      $(document).ready(function() {
         App.init();
      });
   </script>
   @yield('scripts')
   <script src="{{asset('assets/js/custom.js')}}"></script>
   <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
</body>
</html>