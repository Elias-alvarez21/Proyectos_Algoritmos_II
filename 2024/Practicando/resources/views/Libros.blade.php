@extends('welcome')
@section('content'){{--LAYAOUT --}}
@yield("content2")
    <x-libros-table :libros=$libros/>
@endsection