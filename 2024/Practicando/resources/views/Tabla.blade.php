@extends('welcome')
@section('content'){{--LAYAOUT --}}
@yield("content2")
    <x-libros-table :array=$array :tipo=$ident />
@endsection