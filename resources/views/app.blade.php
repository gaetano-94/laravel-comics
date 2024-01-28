@extends('layouts.container')

@section('container')

  @foreach ( $fumetti as $fumetto )
    {{ $fumetto ['title']}}
  @endforeach

@endsection