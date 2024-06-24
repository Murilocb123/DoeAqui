@extends('layout.base')
@section('viewName', 'DoeAqui')
@section('content')
    <div>
        <x-form actionEdit="/doacao/edit/{{$doacao['id']}}" actionCreate="/doacao/create" id="{{$doacao['id']}}" titulo="doação" redirect="/doacao">
            <x-select value="{{$doacao['id_beneficiario']}}" name="id_beneficiario" label="Pessoa" 
                :options="$pessoaListSelect"/>
            <x-select value="{{$doacao['id_doacao_destino']}}" name="id_doacao_destino" label="Endereco" 
                :options="$EnderecoListSelect"/>      
            <x-input value="{{$doacao['titulo']}}" columnsmd="12" type="text" name="titulo" label="Titulo"
                placeholder="título" required=true/>
            <x-input value="{{$doacao['descricao']}}" columnsmd="12" type="text" name="descricao" label="Descricao"
                placeholder="Descrição" required=true/>
            <x-select value="{{$doacao['status']}}" name="status" label="Status" 
            :options="[
                ['value' => 'Ativo', 'label' => 'Ativo', 'selected' => true],
                ['value' => 'Parado', 'label' => 'Parado', 'selected' => false],
            ]"/>
           <x-input value="{{$doacao['imagem']}}" columnsmd="5"  type="file" name="imagem[]" label="imagem"
                placeholder="imagem"/>  {{-- precisa adicionar multiple para varias fotos --}}
           
            <div class="row gy-3">
                <div class="col-md-6 col-6 d-flex justify-content-start">
                    <x-button href="/doacao" styleclass="danger" type="button" label="Cancelar" />
                </div>
                <div class="col-md-6 col-6 d-flex justify-content-end">
                    <x-button styleclass="success" type="submit" label="Salvar" />
                </div>
            </div>
        </x-form>
    </div>
@endSection()
