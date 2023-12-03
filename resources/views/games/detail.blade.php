<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo: {{ $game["nome"] }}</title>
</head>
<body>
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
</body>
</html>