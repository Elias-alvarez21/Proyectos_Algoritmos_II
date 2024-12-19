<div class="form-control">
    <label class="form-label" for="{{ $name }}">{{ $leyenda }}</label><br>
    <select class="form-select" name="{{ $name }}" id="{{ $name }}">
        @foreach($options as $option)
            <option value="{{$option->id}}">{{$option->nombre}}</option>
        @endforeach
    </select>
</div>