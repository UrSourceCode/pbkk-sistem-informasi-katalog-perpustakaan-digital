@extends('layouts.navbar')
@section('container')
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
                            <a href="{{ route('home') }}" class="btn btn-sm btn-secondary">Kembali</a>
                            {{-- <form onsubmit="return confirm('Apakah Anda Yakin Menghapus Data ini ?');" action="{{ route('book.destroy', $data->id) }}" method="POST">
                                <a href="" class="btn btn-sm btn-primary shadow"><i class="fa fa-edit"></i> Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger shadow"><i class="fa fa-trash"></i> Delete</button>
                            </form> --}}
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</center>
</body>
</html>