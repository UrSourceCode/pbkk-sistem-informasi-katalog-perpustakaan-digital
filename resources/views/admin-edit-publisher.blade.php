<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Book</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Author</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Publisher</a>
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
    <center>
        <div class="container-fluid">
            <div class="container position-center">
                <div class="row page-bg">
                    <div class="p-4 col-md-12">
                        <div class="text-center top-icon">
                            <h1 class="mt-3">Edit {{ __('nav.authors') }}</h1>
                            <br>
                            @if (Session::has('error'))
                                <div class="alert alert-danger">{{ Session::get('error') }}</div>
                            @endif
    
                            @if (Session::has('wrongUsername'))
                                <div class="alert alert-danger">{{ Session::get('wrongUsername') }}</div>
                            @endif
    
                            <form id="form-login" action="#" method="post" onsubmit="return confirm('Apakah Anda Yakin Edit Data ?');">
                                @csrf
    
                                <div>
                                    <input class="mt-3 form-control form-control-lg @error('publisher') is-invalid @enderror" name="publisher" type="text"
                                           placeholder="Publisher" value="{{ $data->name ? $data->name : 'Tidak Ada Data' }}" autofocus required>
                                </div>
    
                                @error('publisher')
                                <div class="alert alert-danger">
                                    Publisher salah
                                </div>
                                @enderror
                                
                            </form>
                            <br>
                            <div class="mt-4 text-center submit-btn">
                                <a href="/adminbook" class="btn btn-secondary" onclick="return confirm('Apakah Anda Yakin Kembali ke Halaman Utama ?');">Kembali</a>
                                <button type="submit" class="btn btn-primary" form="form-login">Edit Data</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
              
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"
    ></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> --}}
  </body>
</html>