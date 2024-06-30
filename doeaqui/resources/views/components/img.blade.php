<div>
<picture>
  <source srcset="{{ $image }}" type="image/svg+xml">
  <img src="{{ $image }}" class="img-fluid img-thumbnail" alt="{{ $name }}" {{$visualizacao?'disabled':''}} width="400" height="350">
</picture>
</div>