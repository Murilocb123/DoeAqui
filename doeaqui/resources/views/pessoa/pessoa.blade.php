@extends('layout.base')
@section('viewName', 'DoeAqui')
@section('content')
    <div>
        <x-form actionEdit="/pessoa/edit/{{$pessoa['id']}}" actionCreate="/pessoa/create" id="{{$pessoa['id']}}" titulo="Pessoa" redirect="/pessoa">
            <x-input value="{{$pessoa['nome']}}" columnsmd="12" type="text" name="nome" label="Nome"
                placeholder="Nome" required=true/>
            <x-input value=" {{$pessoa['telefone']}}" columnsmd="12" type="text" name="telefone" label="Telefone"
                placeholder="(47) 0 0000-0000" required=true/>
            <x-input value="{{$pessoa['cpf_cnpj']}}" columnsmd="12" type="text" name="cpf_cnpj" label="CPF/CNPJ"
                placeholder="CPF/CNPJ" required=true/>
            <x-input value="{{$pessoa['email']}}" columnsmd="12" type="email" name="email" label="Email"
                placeholder="Email" required=true/>
            <x-radio value="{{$pessoa['tipo']}}" name="tipo" label="Tipo" :options="[
                ['value' => 'FISICA', 'label' => 'Física', 'selected' => true],
                ['value' => 'JURIDICA', 'label' => 'Jurídica', 'selected' => false],
            ]" required=true/>
            <div class="row gy-3">
                <div class="col-md-6 col-6 d-flex justify-content-start">
                    <x-button href="/pessoa" styleclass="danger" type="button" label="Cancelar" />
                </div>
                <div class="col-md-6 col-6 d-flex justify-content-end">
                    <x-button styleclass="success" type="submit" label="Salvar" />
                </div>
            </div>
        </x-form>
    </div>
@endSection()
