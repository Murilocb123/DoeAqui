@extends('layout.base')
@section('viewName','Pessoas')
@section('content')
<div>
    <x-table titulo="Pessoas" :columns="['nome'=>'Nome','cpf_cnpj'=>'CPF/CNPJ','email'=>'Email','telefone'=>'Telefone']" 
    dados="{{$pessoas}}" rotaCriacao="/pessoa/create" 
    rotaVizualizacao="/pessoa/preview" rotaEdicao="/pessoa/edit" rotaExclusao="/pessoa/delete"/>
    
</div>
@endSection()