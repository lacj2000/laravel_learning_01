@extends('layouts/app')
@section('title')
    Jogos
@endsection('title')

@section('content')
<h1>Jogos</h1>
<?php foreach($games as $key => $game ):?>
    <h4>
            <a href="{{ route('game-detail', ['id' => $key]) }}">
                {{ $game['nome'] }}
            </a>    
        </h4>
        <?php endforeach; ?>
@endsection('content')