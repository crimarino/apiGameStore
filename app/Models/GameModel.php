<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameModel extends Model
{
    protected $table = "games";

    protected $fillable = [
        'id',
        'user_id',
        'name',
        'plataform',
        'description',
        'created_at',
        'updated_at'
    ];
}
