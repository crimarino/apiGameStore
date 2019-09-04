<?php

namespace App\Http\Controllers\Game;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\GameModel;

class GameController extends Controller
{
    public function game(){
        return response()->json(GameModel::get(),200);
    }

    public function gameById($id){
        return response()->json(GameModel::find($id),200);
    }

    public function gameSave(Request $request){
        $game = GameModel::create($request->all());
        return response()->json($game,201);
    }

    public function gameUpdate(Request $request, GameModel $game){
        $game->update($request->all());
        return response()->json($game,200);
    }

    public function gameDelete(Request $request, GameModel $game){
        $game->delete();
        return response()->json(null,204);
    }
}
