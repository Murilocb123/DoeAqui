@extends('layout.base')
@section('viewName', 'DoeAqui')
@section('content')
    <div>
        <x-form actionEdit="/doacao/edit/{{$doacao['id']}}" actionCreate="/doacao/create" id="{{$doacao['id']}}" titulo="doacao" redirect="/doacao">
            <x-input value="{{$doacao['titulo']}}" columnsmd="12" type="text" name="titulo" label="Titulo"
                placeholder="título" required=true/>
            <x-input value=" {{$doacao['finalidade']}}" columnsmd="12" type="text" name="finalidade" label="Finalidade"
                placeholder="Finalidade" required=true/>
            <x-select value="{{$doacao['status']}}" name="status" label="Status" 
            :options="[
                ['value' => 'Ativo', 'label' => 'Ativo', 'selected' => true],
                ['value' => 'Parado', 'label' => 'Parado', 'selected' => false],
            ]"/>
            <x-input value="{{$doacao['email']}}" columnsmd="12" type="email" name="email" label="Email"
                placeholder="Email" required=true/>
            <x-radio value="{{$doacao['tipo']}}" name="tipo" label="Tipo" :options="[
                ['value' => 'FISICA', 'label' => 'Física', 'selected' => true],
                ['value' => 'JURIDICA', 'label' => 'Jurídica', 'selected' => false],
            ]" required=true/>
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
