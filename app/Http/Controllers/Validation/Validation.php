<?php

namespace App\Http\Controllers\Validation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GameModel;

class Validation extends Controller
{
    public function storeProcedure(Request $request)
    {
        $user = GameModel::select('call traerUsuario(?,?)', [
            'emailPas' =>$request->email,
            'passwordPas' =>$request->password
            ]);
        return response()->json($user);
    }
}
