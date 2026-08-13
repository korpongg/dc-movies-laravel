<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta name="google-site-verification" content="a9Av4s3Q6NEtzPZU4BshmnMmgtTJXg9D3SIbV2URVso" />
<title>DC Universe</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.ico') }}">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/paper-dashboard.css?v=2.0.0') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/demo/demo.css') }}" rel="stylesheet" />
            <link href="{{ asset('/assets/css/dc.css') }}" rel="stylesheet">
                        <link href="{{ asset('/assets/css/character.css') }}" rel="stylesheet">
                            <link href="{{ asset('/assets/css/movies.css') }}" rel="stylesheet">
                             <link href="{{ asset('/assets/css/locations.css') }}" rel="stylesheet">
                              <link href="{{ asset('/assets/css/characterdetail.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/css/list.css') }}" rel="stylesheet">
            <link href="{{ asset('/assets/css/about.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/css/navbar.css') }}" rel="stylesheet">
                <link href="{{ asset('/assets/css/footer.css') }}" rel="stylesheet">
                
    @yield('css')
 <script src="{{ asset('/assets/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('/assets/js/core/bootstrap.min.js') }}"></script>

<script src="{{ asset('/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('/assets/js/plugins/bootstrap-notify.js') }}"></script>
<script src="{{ asset('/assets/js/plugins/moment.js') }}"></script>

<script src="{{ asset('/assets/js/paper-dashboard.js?v=2.0.0') }}"></script>
<script src="{{ asset('/assets/demo/demo.js') }}"></script>
  </head>
<body>
    <div class="wrapper"> 

      <div class="main-panel">
        @include('layouts.extends.navbar')

        <div class="content">
            @yield('content')       
        </div>

        @include('layouts.extends.footer')
      </div>

    </div> </body>
  <!--   Core JS Files   -->  

  @yield('js')
</html>