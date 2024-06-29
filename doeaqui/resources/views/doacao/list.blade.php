@extends('layout.base')
@section('viewName','Doacoes')
@section('content')
<div>
    <x-table titulo="Doações" :columns="['titulo'=>'Titulo','descricao'=>'Descrição','finalidade'=>'Finalidade','status'=>'Status']" 
    dados="{{$doacoes}}" rotaCriacao="/doacao/create" 
    rotaVizualizacao="/doacao/preview" rotaEdicao="/doacao/edit" rotaExclusao="/doacao/delete"/>
</div>
@endSection()