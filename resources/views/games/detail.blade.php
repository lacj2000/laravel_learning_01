@extends('layouts/app')

@section('title')
{{ $game["nome"] }}
@endsection('title')

@section('header')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid justify-content-center">
        <a class="navbar-brand" href="{{ route('game-list')}}">Jogos</a>
    </div>
    </nav>
@endsection('header')

@section('content')
<div>
    <h1 class="display-6 text-center">
        {{ $game["name"] }}
    </h1>
    <div class="container-fluid justify-content-center">
        <p class="text-justify">
            <?php echo $game["description"] ?>
        </p>
        <p class="text-start">Sigla: {{ $game["acronym"] }}</p>
        <p class="text-start">Categoria: {{ $game["category"] }}</p>
        <p class="text-start">Ano de Lançamento: {{ $game["creation_year"] }}</p>
        <p class="text-start">Preço: R$ {{ $game["value"] }} </p>
    <a href="{{ route('game-list') }}">Voltar</a>
</div>
</div>
@endsection('content')