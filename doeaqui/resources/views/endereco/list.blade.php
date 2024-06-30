@extends('layout.base')
@section('viewName','Pessoas')
@section('content')
<div>
    <x-table titulo="Endereços" :columns="['uf'=>'Estado','cidade'=>'Cidade','rua'=>'Rua']" 
    dados="{{$enderecos}}" rotaCriacao="/endereco/create" 
    rotaVizualizacao="/endereco/preview" rotaEdicao="/endereco/edit" rotaExclusao="/endereco/delete"/>
</div>
@endSection()