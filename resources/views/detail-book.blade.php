<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Book Details</title>
</head>
<body>
<center>
    <div class="container-fluid">
        <div class="container position-center">
            <div class="row page-bg">
                <div class="p-4 col-md-12">
                    <div class="text-center top-icon">
                        <h1 class="mt-3;">Book Details</h1>
                        <br>
                        @if (Session::has('Deskripsi'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif

                        @if (Session::has('Nama'))
                            <div class="alert alert-danger">{{ Session::get('wrongUsername') }}</div>
                        @endif

                        <form id="form-login" action="" method="get">
                            @csrf
                            <table class="table table-bordered" style="text-align: left">
                            <tr>
                                <td style="width:150px; font-weight:bold">Cover</td>
                                @if($data->image)
                                <td><img src="{{ asset('storage/cover/'. $data->image) }}"class="img-preview img-fluid col-sm-3 d-block">
                                </td>
                                    @endif
                            </tr>

                            @error('gambar')
                            <div class="alert alert-danger">
                                gambar salah
                            </div>
                            @enderror
                            <tr>
                                <td style="width:150px; font-weight:bold">Title</td>
                                <td>{{ $data->title }}</td>
                            </tr>

                            @error('Nama')
                            <div class="alert alert-danger">
                                Nama salah
                            </div>
                            @enderror
                            <tr>
                                <td style="width:150px; font-weight:bold">Author</td>
                                <td>{{ $data->author->name }}</td>
                            </tr>

                            @error('Deskripsi')
                            <div class="alert alert-danger">
                                Deskripsi Salah
                            </div>
                            @enderror
                            <tr>
                                <td style="width:150px; font-weight:bold">Publisher</td>
                                <td>{{ $data->publisher->name }}</td>
                            </tr>

                            @error('Quantity')
                            <div class="alert alert-danger">
                                Quantity Salah
                            </div>
                            @enderror
                            <tr>
                                <td style="width:150px; font-weight:bold">Year</td>
                                <td>{{ $data->year }}</td>
                            </tr>

                            <tr>
                                <td style="width:150px; font-weight:bold">Category</td>
                                <td>{{ $data->category->name }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px; font-weight:bold">ISBN</td>
                                <td>{{ $data->isbn}}</td>
                            </tr>
                            <tr>
                                <td style="width:150px; font-weight:bold">Synopsis</td>
                                <td>{{ $data->synopsis }}</td>
                            </tr>

                        </table>

                        {{-- </form> --}}
                        <br>
                        <div class="mt-4 text-center submit-btn">
                            <a href="{{ route('home') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
</body>
</html>