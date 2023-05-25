@extends('layout')


@section('content')

@foreach($data as @data)
  {{$data['judul']}}
  {{$data['subject']}}<br>
@endforeach
@endsection