@extends('layout.base')
@section('viewName', 'DoeAqui')
@section('content')
    <div>
        <x-form actionEdit="/endereco/edit/{{$endereco['id']}}" actionCreate="/endereco/create" id="{{$endereco['id']}}" titulo="endereco" redirect="/endereco">
            <x-input value="{{$endereco['cep']}}" columnsmd="12" type="text" name="cep" label="Cep"
                placeholder="00.000-000" required=true/>
            <x-input value="{{$endereco['rua']}}" columnsmd="12" type="text" name="rua" label="Rua"
                placeholder="Rua São João" required=true/>
            <x-input value="{{$endereco['numero']}}" columnsmd="12" type="number" name="numero" label="Numero"
                placeholder="000" required=true/>
            <x-input value="{{$endereco['bairro']}}" columnsmd="12" type="text" name="bairro" label="Bairro" 
                placeholder="Ex: Centro" required=true/>            
            <x-input value="{{$endereco['cidade']}}" columnsmd="12" type="text" name="cidade" label="Cidade" 
                placeholder="Ex: Rio do Sul" required=true/> 
            <x-input value="{{$endereco['uf']}}" columnsmd="12" type="text" name="uf" label="Estado" 
                placeholder="Ex: SC" required=true/> 
            <x-input value="{{$endereco['pais']}}" columnsmd="12" type="text" name="pais" label="Pais" 
                placeholder="Ex: Brasil" required=true/>    
            <x-input value="{{$endereco['complemento']}}" columnsmd="12" type="text" name="complemento" label="Complemento" 
                placeholder="" required=true/>          
            <div class="row gy-3">
                <div class="col-md-6 col-6 d-flex justify-content-start">
                    <x-button href="/endereco" styleclass="danger" type="button" label="Cancelar" />
                </div>
                <div class="col-md-6 col-6 d-flex justify-content-end">
                    <x-button styleclass="success" type="submit" label="Salvar" />
                </div>
            </div>
        </x-form>
    </div>
@endSection()
