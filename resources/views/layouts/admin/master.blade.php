{{-- <!DOCTYPE html>
<html>
<head>
    <title>COURSES</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body> --}}
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        @include('layouts.admin.meta')
        <!-- plugins:css -->
        @include('layouts.admin.style')
      </head>
      <body>
        <div class="container-scroller">
          <!-- partial:partials/_navbar -->
          @include('layouts.admin.navbar')
          <!-- partial -->
          <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar -->
            @switch(Auth::user()->role_id)
            @case('1')
            @include('layouts.admin.sidebar.adminsidebar')
            @break
            @case('2')
            @include('layouts.admin.sidebar.coordinatorsidebar')
            @break
            @case('3')
            @include('layouts.admin.sidebar.resourcesidebar')
            @break
            @endswitch
            <!-- partial -->
            <div class="main-panel">
              <div class="content-wrapper">
                <div class="row" id="proBanner">
                <div class="container">
                    @yield('content')
               </div>
               <!--<div class="footer">
                //include('layouts.admin.footer')
            </div> -->
              <!-- partial -->
            </div>
            <!-- main-panel ends -->
          </div>
          <!-- page-body-wrapper ends -->
        </div>
    </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('layouts.admin.script')
        @yield('js')
      </body>
    </html>


