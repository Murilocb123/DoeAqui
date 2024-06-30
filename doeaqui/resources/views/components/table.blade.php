<div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Listagem de <b>{{$titulo}}</b></h2></div>
                    {{--TODO: implementar pesquisa--}}
                    {{-- <div class="col-sm-4">
                        <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div> --}}
                </div>
            </div>
<div class="col-md-12 col-12 d-flex justify-content-end px-0 my-2">
    <x-button styleclass="primary gy-5" type="button" href="{{$rotaCriacao}}" text="Adicionar" label="Adicionar"/>
</div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        @foreach($columns as $column)
                            <th>{{$column}}</th>
                        @endforeach
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($dados as $item)
                       <tr>
                            @foreach($columns as $key=>$column)
                                <td>{{$item->$key}}</td>
                            @endforeach
                            <td>
                                <a href="{{$rotaVizualizacao}}/{{$item->id}}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                <a href="{{$rotaEdicao}}/{{$item->id}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a href="{{$rotaExclusao}}/{{$item->id}}" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>
                    @endforeach 
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Total de registros <b>{{sizeof($dados)}}</b></div>
            </div>
            <div class="col-md-12 col-12 d-flex justify-content-end px-0 my-2">
                <x-button styleclass="primary gy-5" type="button" href="/doacao" text="Adicionar" label="Doações"/>
                <x-button styleclass="primary gy-5 ms-2" type="button" href="/endereco" text="Cancelar" label="Endereços"/>
                <x-button styleclass="primary gy-5 ms-2" type="button" href="/pessoa" text="Cancelar" label="Pessoas"/>
            </div>
        </div>
    </div>  
</div>   
