<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class GameController extends Controller
{   
    private $games;

    public function  __construct()
    {
        $this->games = array(
            array(
                'nome' => 'Counter-Strike: Global Offensive 2',
                'sigla' => 'cs2',
                'descricao' => '<b> A tão aguardada sequência do popular jogo de tiro em primeira pessoa</b>, trazendo novos mapas, modos de jogo e gráficos aprimorados.',
                'ano_lancamento' => 2023
            ),
            array(
                'nome' => 'FIFA 2024',
                'sigla' => 'fifa 24',
                'descricao' => 'A mais recente edição da aclamada série de simulação de futebol, apresentando jogabilidade aprimorada, gráficos realistas e novos recursos de modo carreira.',
                'ano_lancamento' => 2024
            ),
            array(
                'nome' => 'The Legend of Zelda: Breath of the Wild 2',
                'sigla' => 'Breath of the Wild 2',
                'descricao' => 'A continuação do épico jogo de aventura, trazendo um vasto mundo aberto para explorar, novos quebra-cabeças e uma história envolvente.',
                'ano_lancamento' => 2023
            ),
            array(
                'nome' => 'Assassin\'s Creed: Ragnarok',
                'sigla' => 'Assassin\'s Creed: Ragnarok',
                'descricao' => 'Na era dos vikings, você embarcará em uma jornada épica como um assassino, desvendando segredos e conspirações em um mundo aberto deslumbrante.',
                'ano_lancamento' => 2024
            ),
            array(
                'nome' => 'Cyberpunk 2078',
                'sigla' => 'Cyberpunk 2078',
                'descricao' => 'Um RPG de ação ambientado em um futuro distópico, onde megacorporações controlam a sociedade. Explore a cidade de Night City e faça escolhas que afetam o desenrolar da história.',
                'ano_lancamento' => 2022
            ),
        );
    }


    public function index() 
    {
        return view("games/list",["games"=>$this->games]);
    }

    
    public function detail(int $id)
    {
        return view("games/detail",["game"=>$this->games[$id]]);
    }
}
