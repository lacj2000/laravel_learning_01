@extends('layouts/app')

@section('title')
{{ $game["nome"] }}
@endsection('title')

@section('content')
<div>
    <h1>
        {{ $game["nome"] }}
    </h1>
    <div>
        <p>sigla: {{ $game["sigla"] }}</p>
        <p>Ano de Lançamento: {{ $game["ano_lancamento"] }}</p>
        <p>
            <?php echo $game["descricao"] ?>
        </p>
    <a href="{{ route('game-list') }}">Voltar</a>
</div>
</div>
@endsection('content')