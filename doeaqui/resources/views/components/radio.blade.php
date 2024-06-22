<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <div>
        @foreach($options as $option)
            <div class="form-check">
                <input class="form-check-input" type="radio" name="{{ $name }}" id="{{ $name }}_{{ $option['value'] }}" value="{{ $option['value'] }}" 
                {{ $option['selected'] ? 'checked' : '' }} {{$visualizacao?'disabled':''}}>
                <label class="form-check-label" for="{{ $name }}_{{ $option['value'] }}" >
                    {{ $option['label'] }}
                </label>
            </div>
        @endforeach
    </div>
</div>