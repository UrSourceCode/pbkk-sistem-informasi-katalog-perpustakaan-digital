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
 
        @if (Session::has('edit_produk'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; height:auto;">
                <strong><i class="fa fa-check-circle"></i> Berhasil!</strong>
                <br>
                    Pengeditan Produk Berhasil
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif
 
        @if (Session::has('hapus_produk'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; height:auto;">
                <strong><i class="fa fa-check-circle"></i> Berhasil!</strong>
                <br>
                    Penghapusan Produk Berhasil
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif

	  <table class="table" style="background-color:lightgray">
            <thead class="thead-dark" style="background-color:gray ; color: white">
                <tr>
                    <th>ID</th>
                    <th>Cover</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Year</th>
                    <th>Category</th>
                    <th>Action</th>

                </tr>
            </thead>
			@php
                $it = 1;
            @endphp
		@foreach($data as $d)
		<tr>
            
			<td style="background-color:gray ; color: white">{{ $d->id }}</td>
            <td>
                <img src="{{ asset('storage/'.$d->image)}}" class="img-fluid" style="width: 60px; height:90px; text-align:center; margin:0">
            </td>
			<td>{{ $d->title }}</td>
			<td>{{ $d->publisher->name}}</td>
			<td>{{ $d->author->name}}</td>
			<td>{{ $d->year }}</td>
            <td>{{ $d->category->name}}</td>
            
			<td>
                <a href="{{ route('book.show' , $d->id) }}" class="btn btn-sm btn-warning shadow"><i class="fa fa-info-circle"></i> Detail</a>
			</td>
		</tr>
		@php
            $it+=1;
    	@endphp
		@endforeach
	</table>
</div>

</body>
</html>