<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;


class GameController extends Controller
{   
    private $games;

    public function  __construct()
    {
      
    }


    public function index() 
    {   
        $games = Game::all();
        // dd($games);
        return view('games.index',['games'=>$games]);
    }

    
    public function show(int $id)
    {
        $game = Game::where('id', $id)->first();
        if(!empty($game)){
            return view('games.show',['game'=>$game]);
        }else{
            return redirect()->route('games-index');
        }
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        Game::create($request->all());
        return redirect()->route('games-index');
    }

    public function edit(int $id)
    {
        $game = Game::where('id', $id)->first();
        if(!empty($game)){
            // dd($game);
            return view('games.edit', ['game'=>$game]);
        }else{
            return redirect()->route('games-index');
        }
    }

    public function update(Request $request, $id)
    {   
        $data = [
            'name'=> $request->name,
            'acronym'=> $request->acronym,
            'category'=> $request->category,
            'description'=> $request->description,
            'creation_year'=> $request->creation_year,
            'value'=> $request->value,
        ];

        Game::where('id', $id)->first()->update($data);

        return redirect()->route('games-show',[$id]);
        
    }

    public function destroy(int $id)
    {
        Game::where('id', $id)->first()->delete();
        return redirect()->route('games-index');
    }
}
