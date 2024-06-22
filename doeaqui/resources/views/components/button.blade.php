<div>

@if ($href != null)
    <a href="{{$href}}" class="btn btn-{{$styleclass}}" {{$visualizacao?'disabled':''}}>{{$label}}</a>
@else
    <button class="btn btn-{{$styleclass}}" type="{{$type}}" {{$visualizacao?'disabled':''}}>{{$label}}</button>
@endif
</div>