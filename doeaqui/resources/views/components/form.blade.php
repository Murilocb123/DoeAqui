<form class="row g-3" method="{{$method}}" action="{{$action}}" >
@csrf
  {{ $slot }}
</form>