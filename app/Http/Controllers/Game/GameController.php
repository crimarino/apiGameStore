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
}
