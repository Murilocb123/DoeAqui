<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <select class="form-control" name="{{ $name }}" id="{{ $name }}" {{ $visualizacao ? 'disabled' : '' }}>
        @foreach($options as $option)
            <option value="{{ $option['value'] }}" {{ $option['selected'] ? 'selected' : '' }}>
                {{ $option['label'] }}
            </option>
        @endforeach
    </select>
</div>
