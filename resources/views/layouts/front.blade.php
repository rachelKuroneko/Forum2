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

      <!-- Defining heading for each page using the yield heading -->
      <div class="row">
        <div class="row content-heading">
          <div class="col-md-3">
            <h4>Category</h4>
          </div>
          <div class="col-md-9">
            <!-- <a href="{{ route('thread.create')}}" class="btn btn-primary">
              Create Threads
            </a> -->
            <!-- <div class="row"> -->
              <div class="col-md-4">
                <h4 class="main-content-heading">@yield('heading')</h4>
              </div>

            <!-- </div> -->
          </div>
        </div>
        <div class="col-md-offset-6 col-md-2">
          <a href="{{ route('thread.create')}}" class="btn btn-primary">
            Create Threads
          </a>
        </div>
      </div>

      <div class="row">
      <!-- this will take 3 columns  -->
      <!-- Category selection -->
        <div class="col-md-3">
            <ul class="list-group">
                <a href="{{ route('thread.index')}}" class="list-group-item">
                    <span class="badge">14</span>
                    All thread
                </a>
                <a href="#" class="list-group-item">
                    <span class="badge">2</span>
                    PHP
                </a>
                <a href="#" class="list-group-item">
                    <span class="badge">1</span>
                    Python
                </a>
            </ul>
          </div>

        <!-- take the remaining 9 columns  -->
        <div class="col-md-9">
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
