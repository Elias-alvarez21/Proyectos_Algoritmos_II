<div>
    <label for="{{ $name }}">{{ $leyenda }}</label>
    <input class="form-control" type="{{ $tipo }}" name="{{ $name }}" id="{{ $name }}" value="{{(isset($value))?$value:""}}">
</div>
