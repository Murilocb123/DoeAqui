@extends('layout.base')
@section('viewName','DoeAqui')
@section('content')
    <div>
        <x-form :method="'POST'" :action="'/'">
            <x-input :type="'text'" :name="'nome'" :label="'Nome'" :placeholder="'Nome'" />
            <x-input :type="'text'" :name="'telefone'" :label="'Telefone'" :placeholder="'(47) 9 8890-2398'" />
            <x-input :type="'text'" :name="'cpf_cnpj'" :label="'CPF/CNPJ'" :placeholder="'CPF/CNPJ'" />
            <x-input :type="'text'" :name="'tipo'" :label="'Tipo'" :placeholder="'FISICA'" />
        </x-form>
    </div>
@endSection()