@extends('layouts/app')

@section('title')
Novo jogo
@endsection('title')

@section('header')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid justify-content-center">
        <a class="navbar-brand display-1 fs-3" href="{{ route('games-index')}}">Jogos</a>
    </div>
    </nav>
@endsection('header')

@section('content')
<div class="container">
    <h1 class="display-1 text-center my-2 fs-2">Adicione um novo jogo</h1>
    <hr>
    
    <form class="" action="{{ route('games-store') }}" method="POST">
        @csrf
        <div class="form-group pb-2">
            <label for="name" class="form-label">Nome do Jogo:</label>
            <input type="text" class="form-control" name="name" placeholder="Digite o nome...">
        </div>
        
        <div class="form-group pb-2">
            <label for="acronym" class="form-label">Sigla do Jogo:</label>
            <input type="text" class="form-control" name="acronym" placeholder="Digite sigla do jogo...">        
        </div>
        
        <div class="form-group pb-2">
            <label for="category" class="form-label">Categoria do Jogo:</label>
            <input type="text" class="form-control" name="category" placeholder="Digite a Categoria do Jogo...">
        </div>
        
        <div class="form-group pb-2">
            <label for="description" class="form-label">Descrição do Jogo:</label>
            <input type="text" class="form-control" name="description" placeholder="Digite a Descrição do jogo...">
        </div>
        
        <div class="form-group pb-2">
            <label for="creation_year" class="form-label">Ano de Lançamento do Jogo:</label>
            <input type="text" class="form-control" name="creation_year" placeholder="Digite o Ano de Lançamento do Jogo...">        
        </div>
        
        <div class="form-group pb-2">        
            <label for="vale" class="form-label">Preço do Jogo:</label>
            <input type="number" class="form-control" name="value" placeholder="Digite o preço do Jogo...">
        </div>
        <div class="form-group pb-2">
            <a class="btn btn-danger" href="{{ route('games-index') }}">Cancelar</a>
            <input type="submit" name="submit" class="btn btn-success">
        </div>
        
    </form>
    
</div>
@endsection('content')