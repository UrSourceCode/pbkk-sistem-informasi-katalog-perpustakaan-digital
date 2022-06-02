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
            <a href="{{ route('book.create') }}" class="btn btn-success"> Add new book</a>
        </center>
    </div>
    <div class="container text-center">
        <a href="authors" class="btn btn-primary"> All Author</a>
        <a href="category" class="btn btn-primary"> All Categories</a>
        <a href="publisher" class="btn btn-primary"> All Publisher</a>
        <a href="/" class="btn btn-primary"> Katalog</a>
    </div>
    <br>
        <div class="container" style="text-align:center; position:inline-block;">
        @foreach($data as $d)
          
            <div class="card" style="width: 21rem; float:left; margin: 10px;">
              <div>
                  <img src="{{ asset('storage/cover/'.$d->image)}}" class="card-img-top"style="width: 120px; height:150px;text-align:center;">
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

</body>
</html>