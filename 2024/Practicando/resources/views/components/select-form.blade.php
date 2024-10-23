<div>
    <label for="{{ $name }}">{{ $leyenda }}</label><br>
    <select class="form-select" name="{{ $name }}" id="{{ $name }}">
        @foreach($options as $option)
            <option value="{{$option['value']}}">{{ $option['texto']}}</option>
        @endforeach
    </select>
</div>
