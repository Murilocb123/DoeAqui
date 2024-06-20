<div>

@if ($href != null)
    <a href="{{$href}}" class="btn btn-{{$styleclass}}">{{$label}}</a>
@else
    <button class="btn btn-{{$styleclass}}" type="{{$type}}">{{$label}}</button>
@endif
</div>