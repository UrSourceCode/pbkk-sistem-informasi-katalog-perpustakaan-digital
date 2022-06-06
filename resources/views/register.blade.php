<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}
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
      <a class="navbar-brand me-2" href="/">
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
          {{-- <li class="nav-item">
            <a class="nav-link" href="#">Dashboard</a>
          </li> --}}
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
    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="https://www.svgrepo.com/show/181747/library-book.svg"
                class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
              <form>

                <h3 class="fw-normal mb-3 pb-3"">{{ __('form.register') }}</h3>

                <!-- Name input -->
                <div class="form-outline mb-4">
                  <input type="text" id="name" name="name" class="form-control form-control-lg" />
                  <label class="form-label" for="name">{{ __('form.profile.name') }}</label>
                </div>

                <!-- Instance input -->
                <div class="form-outline mb-4">
                  <input type="text" id="instance" name="instance" class="form-control form-control-lg" />
                  <label class="form-label" for="instance">{{ __('form.profile.instance') }}</label>
                </div>

                <!-- Phone input -->
                <div class="form-outline mb-4">
                  <input type="tel" id="phone" name="phone" class="form-control form-control-lg" />
                  <label class="form-label" for="phone">{{ __('form.profile.phone') }}</label>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="email" name="email" class="form-control form-control-lg" />
                  <label class="form-label" for="email">{{ __('form.profile.email') }}</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="password" name="password" class="form-control form-control-lg" />
                  <label class="form-label" for="password">{{ __('form.profile.password') }}</label>
                </div>

                <!-- Confirm Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="confirm-password" name="confirm-password" class="form-control form-control-lg" />
                  <label class="form-label" for="confirm-password">{{ __('form.profile.confirmpw') }}</label>
                </div>
                
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('form.register') }}</button>
      
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0 text-muted">{{ __('form.or') }}</p>
                </div>
      
                <a class="btn btn-primary btn-lg btn-block" href="/login">{{ __('form.login') }}</a>
      
      
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"
    ></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> --}}
  </body>
</html>