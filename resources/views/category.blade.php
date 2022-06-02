@extends('layouts.main')
@section('container')
@foreach($data as $d)
          
            <div class="card" style="width: 21rem; float:left; margin: 10px;"> 
              <div class="card-body" style="width:21rem">
                      <a href="{{ $jenis }}/{{ $d->id}}" class="card-text">{{ $d->name}}</a>
                </div>
            </div>
        @endforeach
@endsection