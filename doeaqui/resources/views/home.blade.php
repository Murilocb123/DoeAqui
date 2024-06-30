@extends('layout.base')
@section('viewName','DoeAqui')
@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                      @foreach($doacaoListSelect as $doacao)
                        @if (!empty($doacao['label']))
                            @if ($doacao['status'] == 'Ativo')
                                <div class="carousel-item{{ $loop->first ? ' active' : '' }}" rotaVizualizacao="/doacao/preview">
                                    <a href="/doacao/preview/{{$doacao['id']}}"><img src="/storage/imagem/{{$doacao['label']}}" alt="{{$doacao['value']}}" width="600" height="433"> </a>
                                    <h3 class="text-center">{{$doacao['value']}}</h3>
                                </div> 

                            @endif
                        @endif
                      @endforeach
              </div>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="row">
            @foreach($doacaoListSelect as $doacao)
                @if (!empty($doacao['label']))
                    @if ($doacao['status'] == 'Ativo')
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <a href="/doacao/preview/{{$doacao['id']}}">
                                    <img src="/storage/imagem/{{$doacao['label']}}" class="card-img-top" alt="{{$doacao['value']}}"width="300" height="250">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{$doacao['value']}}</h5>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
            @endforeach
        </div>
    </div>
@endsection()
