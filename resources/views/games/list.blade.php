@extends('layouts/app')
@section('title')
    Jogos
@endsection('title')

@section('header')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid justify-content-center">
        <a class="navbar-brand" href="{{ route('game-list')}}">Jogos</a>
    </div>
    </nav>
@endsection('header')

@section('content')
    <div >
    @foreach($games as $game)
        <a class="list-group-item list-group-item-action" href="{{ route('game-detail', ['id' => $game['id']]) }}">
            {{ $game['name'] }}
        </a>    
    @endforeach
    </div>
@endsection('content')