<?php

namespace App\Http\Controllers\Validation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ValidationModel;
use DB;

class Validation extends Controller
{
    public function storeProcedure(Request $request)
    {
        /* $email = $request->email;
        $password = $request->password;

        $user = GameModel::select('call traerUsuario(?,?)', [$email, $password]); */

        $user = DB::select('call traerUsuario(?, ?)',
            [
                $request->email,
                $request->password
            ]);
            
        /* $user = ValidationModel::select('call traerUsuario("crimarino@uniboyaca.edu.co", "123456789")'); */
        return response()->json($user);

        /* return response()->json(ValidationModel::select("call traerUsuario(crimarino@uniboyaca.edu.co","123456789"),200); */

    }
}
