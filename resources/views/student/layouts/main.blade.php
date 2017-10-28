<!doctype html>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Student Management</title>
  <link href={{asset('css/app.css')}} rel="stylesheet">

  @yield('styles')
</head>
<body>

  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href={{url('student')}}>Student CRUD</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
            <a href={{url('student')}}>Home<span class="sr-only">(current)</span></a>
          </li>
          <li>
            <a href={{url('student/create')}}>New student</a>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>

  @yield('content')

  <script src={{asset('js/app.js')}}></script>

  @yield('scripts')
</body>
</html>