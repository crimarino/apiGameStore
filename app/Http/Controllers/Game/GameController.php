<?php

namespace App\Http\Controllers\Game;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\GameModel;
use Validator;

class GameController extends Controller
{
    /* public function game(){
        return response()->json(GameModel::get(),200);
    } */

    /* public function gameById($id){
        $game = GameModel::find($id);
        if(is_null($game)){
            return response()->json(["message"=>'Record not found'],404);
        }
        return response()->json($game,200);
    } */

    /* public function gameSave(Request $request){
        $rules = [
            'name' => 'required|min:3',
            'plataform' => 'required|min:2'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }

        $game = GameModel::create($request->all());
        return response()->json($game,201);
    } */

    /* public function gameUpdate(Request $request, $id){
        $game = GameModel::find($id);
        if(is_null($game)){
            return response()->json(["message"=>'Record not found'],404);
        }
        $game->update($request->all());
        return response()->json($game,200);
    } */

    /* public function gameDelete(Request $request, $id){
        $game = GameModel::find($id);
        if(is_null($game)){
            return response()->json(["message"=>'Record not found'],404);
        }
        $game->delete();
        return response()->json(null,204);
    } */
}
