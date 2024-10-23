@extends('layouts.app')

@section('content')
<body>
    <style>
        body {
            background-color: #808080;
        }
    </style>
</body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div style="display: flex; gap: 10px;">
                    <form action="{{route('ventas.index')}}"><button class="btn btn-primary" type="submit">Listado de Ventas↲</button></form>
                        <div style="display: inline;">
                            <form action="{{route('auto.index') }}"><button class="btn btn-info" type="submit">Listado de Auto↲</button></form><br>
                            <form action="{{route('auto.create') }}"><button class="btn btn-info" type="submit">Registrar un Auto nuevo↲</button>
                        </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
