@extends('layouts/app')

@section('title')
{{ $game["name"] }}
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
    <h2 class="display-1 text-center my-2 fs-2">
        {{ $game["name"] }}
    </h2>
    <div class="container-fluid justify-content-center">
        <p class="text-justify">
            <?php echo $game["description"] ?>
        </p>
        <p class="text-start">Sigla: {{ $game["acronym"] }}</p>
        <p class="text-start">Categoria: {{ $game["category"] }}</p>
        <p class="text-start">Ano de Lançamento: {{ $game["creation_year"] }}</p>
        <p class="text-start">Preço: R$ {{ $game["value"] }} </p>
        <div class="d-flex justify-content-end mt-3">
            <a class="btn btn-primary me-1" href="{{ route('games-edit', ['id' => $game['id']]) }}">
                <i class="bi bi-pencil-square"></i>
            </a>   
            <form method="POST" action="{{ route('games-destroy', ['id'=> $game['id']])}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger me-1" type="submit">
                    <i class="bi bi-trash"></i>
                </button>     
            </form>
            <a class="btn btn-primary" href="{{ route('games-index') }}">Voltar</a>
        </div>
    </div>
</div>
@endsection('content')