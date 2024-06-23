<div class="col-md-{{ $columnsmd }} col-{{ $columnsxs }}">
  <label for="input-{{ $name }}" class="form-label">{{ $label }}</label>
  <input name="{{$name}}" type="{{ $type }}" class="form-control" id="input-{{ $name }}" placeholder="{{ $placeholder }}" 
  value="{{$value}}" {{$required?'required':''}} {{$visualizacao?'disabled':''}}>
</div>