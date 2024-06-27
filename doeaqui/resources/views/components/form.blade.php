
<form class="row g-3" method="POST" action="{{$action}}"  enctype="multipart/form-data">
@csrf
@method($method)
            @if ($id && $id != '')
                <h1>Edição de {{$titulo}}</h1>
                <input class="d-none" value="{{$id}}" type="hidden" id="id" name="id"/>
            @else
                <h1>Cadastro de {{$titulo}}</h1>
            @endif
            @if ($redirect)
                <input class="d-none" value="{{$redirect}}" type="hidden" id="redirect" name="redirect"/>
            @endif
  {{ $slot }}
</form>

{{-- g = espaçamento --}}