<?php

namespace App\Http\Controllers\Validation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GameModel;

class Validation extends Controller
{
    public function storeProcedure(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user = GameModel::select('call traerUsuario(?,?)', [$email, $password]);

        /* $user = GameModel::select('call traerUsuario(?,?)', 
            [
                'emailPas' =>$request->email,
                'passwordPas' =>$request->password
            ]); */
        return response()->json($user); 
    }
}
