@extends('layout.base')
@section('viewName', 'DoeAqui')
@section('content')
    <div>
        <x-form actionEdit="/doacao/edit/{{$doacao['id']}}" actionCreate="/doacao/create" id="{{$doacao['id']}}" titulo="doação" redirect="/doacao">
           
           <x-input value="{{$doacao['titulo']}}" columnsmd="12" type="text" name="titulo" label="Nome da doação"
                placeholder="título" required=true visualizacao="{{$visualizacao}}"/>

           <x-select value="{{$doacao['id_beneficiario']}}" columnsmd="12" name="id_beneficiario" label="Pessoa beneficiária" 
                :options="$pessoaListSelect" visualizacao="{{$visualizacao}}"/> 

           <x-select value="{{$doacao['id_doacao_destino']}}" columnsmd="12" name="id_doacao_destino" label="Endereco do beneficiária" 
                :options="$EnderecoListSelect" required=true visualizacao="{{$visualizacao}}"/>   

            <x-textarea value="{{$doacao['descricao']}}" columnsmd="12" name="descricao" label="Descricao" placeholder="Descrição" required=true visualizacao="{{$visualizacao}}"/>

            <x-input value="{{$doacao['forma_doar']}}" columnsmd="12" type="text" name="forma_doar" label="formas de doar"
                placeholder="Descrição" required=true visualizacao="{{$visualizacao}}"/>

            <x-select value="{{$doacao['status']}}" columnsmd="12" name="status" label="Status" visualizacao="{{$visualizacao}}"
            :options="[
                ['value' => 'Ativo', 'label' => 'Ativo', 'selected' => true],
                ['value' => 'Parado', 'label' => 'Parado', 'selected' => false],
            ]" />

           <x-input value="{{$doacao['caminho_imagem']}}" columnsmd="5"  type="file" name="imagem" label="imagem"
                placeholder="imagem" visualizacao="{{$visualizacao}}"/>

            @if ($visualizacao == true)
                <img src="/storage/imagem/{{$doacao['caminho_imagem']}}" alt="Trulli" style="width=200px height=150px">
            @endif
            
            <br>

            <div class="row gy-3">
                <div class="col-md-6 col-6 d-flex justify-content-start">
                    <x-button href="/doacao" styleclass="danger" type="button" label="Cancelar" />
                </div>
                <div class="col-md-6 col-6 d-flex justify-content-end">
                    <x-button styleclass="success" type="submit" label="Salvar" visualizacao="{{$visualizacao}}"/>
                </div>
            </div>
        </x-form>
    </div>
@endSection()
