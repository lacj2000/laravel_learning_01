<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// routes returning only views
// 
// Route::get('/home', function () {
//     return view('welcome');
// });
// 
// Route::get('/games', function()use($games){
//     return view('games', ['games'=> $games]);
// })->name('list-games');
// 
// Route::get('/game/{id}', function($id) use ($games){
//     if (array_key_exists($id, $games)){
//         return view('game', ['game'=>$games[$id]]);
//     }
//     else {
//         abort(404, "Não existem dados sobre esse jogo...");
//     }
// })->where('id', '[0-9]+')->name('detail-games');
// 
// Route::fallback(function(){
//     return "Pagina não existe";
// });

Route::prefix('games')->group(function(){
    Route::get("/",[GameController::class, "index"])->name("games-index");
    Route::get("/create",[GameController::class, "create"])->name("games-create");
    Route::post("/",[GameController::class, "store"])->name("games-store");
    Route::get("/{id}",[GameController::class, "show"])->where('id', '[0-9]+')->name("games-show");
    Route::get("/{id}/edit",[GameController::class, "edit"])->where('id', '[0-9]+')->name("games-edit");
    Route::put("/{id}",[GameController::class, "update"])->where('id', '[0-9]+')->name("games-update");
    Route::delete("/{id}",[GameController::class, "destroy"])->where('id', '[0-9]+')->name("games-destroy");

});
