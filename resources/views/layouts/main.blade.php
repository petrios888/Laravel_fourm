<html>
    <head>
        <title>@yield('title')</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
        crossorigin="anonymous">
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>

      <header>
        <div class="container">
        <nav>
          <a href="#">Home</a>
          <a href="#">about</a>
          <a href="#">Search</a>
          <a href="#">Contact</a>
        </nav>
      </div>

      </header>
        @section('sidebar')
            
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
