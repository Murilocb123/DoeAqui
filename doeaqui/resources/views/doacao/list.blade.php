@extends('layout.base')
@section('viewName','Doacoes')
@section('content')
<div style="text-align: justify;">
    <x-table titulo="Doações" :columns="['titulo'=>'Titulo','descricao'=>'Descrição','status'=>'Status']" 
    dados="{{$doacoes}}" rotaCriacao="/doacao/create" 
    rotaVizualizacao="/doacao/preview" rotaEdicao="/doacao/edit" rotaExclusao="/doacao/delete"/>
</div>
@endSection()