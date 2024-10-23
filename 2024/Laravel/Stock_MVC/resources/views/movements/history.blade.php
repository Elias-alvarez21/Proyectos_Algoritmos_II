@extends('layout')

@section('content')
<p class="text-center" style="font-size:24px">Movimientos del Producto {{$nombreproducto}}</h3>
<form class="row g-3" id ="frmMovement" method="POST" action="{{ route('movements.store')}}">
    @csrf
    <div class="row">
    <div class="col-sm-4 text-center">
        <select class="form-control form-control-sm" id="type" name="type" required>
        <option value="ENTRANTE">ENTRANTE</option><option value="SALIENTE">SALIENTE</option>
      </select> 
    </div>
    <div class="col-sm-2 text-center">
      <input type="number" min="1" class="form-control form-control-sm" id="quantity" name="quantity" required>
    </div>
    <div class="col-sm-4 text-center">
        <input type="text" class="form-control form-control-sm" id="observations" name="observations" placeholder="Observaciones">
      </div>
    <div class="col-sm-2 text-center">
     <button type="submit" class="btn btn-primary btn-sm">REGISTRAR</button>
    </div>
    <input type="hidden" id="idproduct" name="idproduct" value="{{$idproduct}}">
    </div>    
</form>  

          <div class="row">
                <div class="col-sm-12 mx-auto">
                    <table id="productsTable" class="table table-sm table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>FECHA</th>    
                                <th>CANTIDAD</th>
                                <th>OBSERVACIONES</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($movements as $movement)
                            <tr id ="{{ $movement->idmovement }}">
                                <td>{{ $movement->idmovement }}</td>
                                <td>{{ $movement->created_at }}</td>
                                <td>{{ $movement->quantity }}</td>
                                <td>{{ $movement->observations }}</td>
                                </td>
                                <td>
                               <form action="{{ route('movements.destroy', $movement->idmovement) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button
                                                type="submit"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('¿Desea eliminar el movimiento ID  {{$movement->idmovement}}?')"><i class="fas fa-trash" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>    
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex">
                {{ $movements->links() }}
            </div>
                </div>
            </div>
            <div class="d-flex justify-content-center"><a href="{{route('products.index')}}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Regresar al Listado General</a></div>             
@endsection