<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,  user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Webdev Forum</title>
    <link href="https://bootswatch.com/4/lumen/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
  </head>
  <body>
  @include('layouts.partials.navbar')

  @yield('banner')
    <div class="container">
      <div class="row">
      <!-- this will take 3 columns  -->
          @section('category')
      <!-- Category selection -->
              @include('layouts.partials.categories')
          @show

        <!-- take the remaining 9 columns  -->
        <div class="col-md-9">
          <div class="row content-heading"><h4>@yield('heading')</h4></div>
          <div class="content-wrap well">
              @yield('content')
          </div>
        </div>

      </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
