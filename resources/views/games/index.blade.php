@extends('layouts/app')
@section('title')
    Jogos
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
        <div class="d-flex justify-content-between align-items-center my-3">
            <h1 class="fs-2 display-1">Lista de Jogos</h1>
            <a class="btn btn-success" href="{{ route('games-create') }}"> Novo Jogo</a>
        </div>
        <table class="table my-auto">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Ano de Lançamento</th>
                    <th scope="col">Preço</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($games as $game)
                    <tr>
                        <th>{{ $game['if'] }}</th>
                        <th>{{ $game['name'] }}</th>
                        <th>{{ $game['category'] }}</th>
                        <th>{{ $game['creation_year'] }}</th>
                        <th>$ {{ $game['value'] }}</th>
                        <th class='d-flex'>
                            <a class="btn btn-success me-1" href="{{ route('games-show', ['id' => $game['id']]) }}">
                                Visualizar
                            </a>    
                            <a class="btn btn-primary me-1" href="{{ route('games-edit', ['id' => $game['id']]) }}">
                                <i class="bi bi-pencil-square"></i>
                            </a>   
                            <form method="POST" action="{{ route('games-destroy', ['id'=> $game['id']])}}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">
                                    <i class="bi bi-trash"></i>
                                </button>     
                            </form>
                        </th>

                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection('content')