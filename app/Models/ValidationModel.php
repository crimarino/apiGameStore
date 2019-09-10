<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValidationModel extends Model
{
    protected $table = "users";

    protected $fillable = [
        'email',
        'password'
    ];
}
