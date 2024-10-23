<div>
    <label class="form-label" for="{{ $name }}">{{ $leyenda }}</label>
    <select class="form-control" name="{{ $name }}">
    <option selected disabled value="" ></option>
    @foreach($options as $option)
    <option value="{{ $option }}" ></option>
    @endforeach
    </select>
</div>