<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css"
    rel="stylesheet"
    />
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
    </style>
  </head>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand me-2" href="#">
        <img
          src="https://www.svgrepo.com/show/181747/library-book.svg"
          height="16"
          alt="Logo"
          loading="lazy"
          style="margin-top: -1px;"
        />
      </a>
  
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarButtonsExample"
        aria-controls="navbarButtonsExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarButtonsExample">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/home">{{ __('nav.home') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/category">{{ __('nav.categories') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/author">{{ __('nav.authors') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/publisher">{{ __('nav.publishers') }}</a>
          </li>
        </ul>
        <!-- Left links -->
  
        <div class="d-flex align-items-center">
          <ul class="navbar-nav">
            @php $locale = session()->get('locale'); @endphp
            <!-- Icon dropdown -->
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
              >
                @switch($locale)
                    @case('en')
                        <i class="flag-united-kingdom flag m-0"></i>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                          <a class="dropdown-item" href="#"
                            ><i class="flag-united-kingdom flag"></i>English
                            <i class="fa fa-check text-success ms-2"></i
                          ></a>
                        </li>
                        @break
                    
                    @case('id')
                        <i class="flag-indonesia flag m-0"></i>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                          <a class="dropdown-item" href="#"
                            ><i class="flag-indonesia flag"></i>Indonesia
                            <i class="fa fa-check text-success ms-2"></i
                          ></a>
                        </li>
                        @break
                    
                    @default
                        <i class="flag-united-kingdom flag m-0"></i>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                          <a class="dropdown-item" href="#"
                            ><i class="flag-united-kingdom flag"></i>English
                            <i class="fa fa-check text-success ms-2"></i
                          ></a>
                        </li>
                        <?php
                        $locale = 'en';
                        ?>
                    
                @endswitch
                <li><hr class="dropdown-divider" /></li>

                <?php
                  $curpath = Request::path();
                  if(Str::substr($curpath, -1) != '/')
                        $curpath = $curpath."/";
                  if(Str::substr($curpath, 0, 1) != '/')
                        $curpath = "/".$curpath;
                ?>
                
                @if($locale != 'en')
                    <li>
                      <a class="dropdown-item" href="{{ $curpath }}lang=en"><i class="flag-united-kingdom flag"></i>English</a>
                    </li>
                @endif

                @if($locale != 'id')
                    <li>
                      <a class="dropdown-item" href="{{ $curpath }}lang=id"><i class="flag-indonesia flag"></i>Indonesia</a>
                    </li>
                @endif

              </ul>
            </li>
          </ul> 
        </div>
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <body>
    <div class="jumbotron">
        <center>
            <h1 class="display-4">Books Catalog</h1>
        </center>
        </div>
        <div class="container" style="text-align:center; position:inline-block;">
        @foreach($data as $d)
          
            <div class="card" style="width: 25rem; float:left; margin: 10px;">
              <div>
                  <img src="{{ asset('storage/'.$d->image)}}" class="card-img-top"style="width: 120px; height:150px;text-align:center;">
              </div>  
              <div class="card-body" style="width:25rem">
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
                      <a href="#">{{ __('page.backtotop') }}</a>
                  </p>
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
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"
    ></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> --}}
  </body>
</html>