<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{

    protected $fillable = [
        'id', 'name', 'lastname', 'email', 'telephone',
    ];

    public static $rules = [
        "name" => "required",
        "lastname" => "required",
        "email" => "required",
        "telephone" => "required",
    ];

}
