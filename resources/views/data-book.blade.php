<!doctype html>
<html lang="en">
 
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
      <title>Daftar Produk</title>
  </head>
 
  <body>
    <div class="jumbotron">
        <center>
            <h1 class="display-4">Books Catalog</h1>
        </center>
        </div>
        <div class="container" style="text-align:center; position:inline-block;">
        @foreach($data as $d)
          
            <div class="card" style="width: 21rem; float:left; margin: 10px;">
              <div>
                  <img src="{{ asset('storage/'.$d->image)}}" class="card-img-top"style="width: 120px; height:150px;text-align:center;">
              </div>  
              <div class="card-body" style="width:21rem">
                      <p class="card-text"><b>{{ $d->title }}</b></p>
                      <p class="card-text">{{ $d->year }}</p>
                      <p class="card-text">{{ $d->author->name}}</p>
                      <a href="{{ route('book.show' , $d->id) }}" class="btn btn-warning">Detail</a>
                      
                </div>
            </div>
        @endforeach
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
