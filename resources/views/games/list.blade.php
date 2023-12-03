<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos</title>
</head>
<body>
    <h1>Jogos</h1>
    <?php foreach($games as $key => $game ):?>
        <h4>
            <a href="{{ route('game-detail', ['id' => $key]) }}">
                {{ $game['nome'] }}
            </a>    
        </h4>
    <?php endforeach; ?>
</body>
</html>