

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  @include('partials._css')

  
  <!--For costum style for specific page call:
          @section('stylesheet')
          <link rel=""...../>
          @endsection-->
  @yield('stylesheet')
