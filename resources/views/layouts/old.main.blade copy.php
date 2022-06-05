<!doctype html>
<html lang="en">
 
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
      <title>home</title>
  </head>
 
  <body>
    <div class="jumbotron">
        <center>
            <h1 class="display-4">{{ $title }}</h1>
        </center>
    </div>
    <div class="container text-center">
        <a href="{{ route('all.authors') }}" class="btn btn-primary"> All Author</a>
        <a href="{{ route('all.categories') }}" class="btn btn-primary"> All Categories</a>
        <a href="{{ route('all.publishers') }}" class="btn btn-primary"> All Publisher</a>
        <a href="{{ route('home') }}" class="btn btn-primary"> Katalog</a>
    </div>
    <br>
        <div class="container" style="text-align:center; position:inline-block;">
        @yield('container')
        </div>
              
 
          <footer class="text-muted" style="clear: both;">
              <hr>
              <div class="container">
                  <p class="float-right">
                      <a href="#">Back to top</a>
                  </p>
                  <p>Copyright 2019 © Webhozz</p>
              </div>
          </footer>
 
 
          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
              integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
              crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
              integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
              crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
              integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
              crossorigin="anonymous"></script>
  </body>
 
</html>
