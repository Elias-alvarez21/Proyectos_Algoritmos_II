<div class="form-group">
    <label class="form-label" for="{{$nombre}}">{{$leyenda}}</label>
    <input class="form form-control" type="{{$tipo}}" name="{{$nombre}}" id="{{$nombre}}" value="{{ $nombre === 'clienteId' ? $id : ''}}">
</div>