<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Seeders</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info font-weight-bold">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link {{(Route::getCurrentRoute()->uri() === "/")? 'active' : ''}}" href="/">Home</a>
            </li>
            <li class="nav-item  {{(Route::getCurrentRoute()->uri() == "users/all")? 'active' : ''}}">
              <a class="nav-link" href="/users/all">All Users</a>
            </li>
            <li class="nav-item {{(Route::getCurrentRoute()->uri() == "companies/all")? 'active' : ''}}">
              <a class="nav-link" href="/companies/all">All Companies</a>
            </li>
          </ul>
        </div>
      </nav>
    <section class="container my-5 p-3">

        @yield('content')
    </section>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>