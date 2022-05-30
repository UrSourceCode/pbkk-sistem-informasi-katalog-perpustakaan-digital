@extends('layouts.main')
@section('container')
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
@endsection
