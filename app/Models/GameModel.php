<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameModel extends Model
{
    protected $table = "games";
    public $timestamps = false;

    protected $fillable = [
        'name',
        'user_id',
        'plataform',
        'description'
    ];
}
