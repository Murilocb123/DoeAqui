<div class=" col-md-{{ $columnsmd }} col-{{ $columnsxs }}">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <select class="form-control" name="{{ $name }}" id="{{ $name }}" {{ $visualizacao ? 'disabled' : '' }} {{$required?'required':''}}>
        @foreach($options as $option)
            <option value="{{ $option['value'] }}" {{ $option['selected'] ? 'selected' : '' }}>
                {{ $option['label'] }}
            </option>
        @endforeach
    </select>
</div>
