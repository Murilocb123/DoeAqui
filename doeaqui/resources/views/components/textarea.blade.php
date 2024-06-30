<div class=" col-md-{{ $columnsmd }} col-{{ $columnsxs }}">
  <label for="input-{{ $name }}" class="form-label">{{ $label }}</label>
  <textarea name="{{$name}}" class="form-control" id="input-{{ $name }}" placeholder="{{ $placeholder}}" 
  {{$required?'required':''}} {{$visualizacao?'disabled':''}} style="height: 250px"> {{$value}}</textarea>
</div>
