<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>
  
  <body>

    @include('partials._nav')
      

    @yield('content')


    @include('partials._footer')


    @include('partials._javascript')

    <!--For costum scripts for specific page call:
            @section('scripts')
            <script src=""...../>
            @endsection-->
    @yield('stylesheet')
  </body>

</html>
