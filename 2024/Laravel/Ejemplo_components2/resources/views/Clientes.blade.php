@extends('welcome')
@section('content')
@if(session('success'))
  <div class="alert alert-success d-flex align-items-center" role="alert">{{session('success')}}</div>
@endsession
     @if(isset($cliente)) 
		<H1>Editar Cliente {{$cliente->nombre}}</H1>
		<x-form-cliente method="PUT" :cliente=$cliente action="{{route('cliente.update', $cliente->clienteId)}}"/>
	@else 
		<H1>Crear Nuevo Cliente</H1>
		<x-form-cliente method="POST" action="{{route('cliente.store')}}"/>
	@endif
@endsection
