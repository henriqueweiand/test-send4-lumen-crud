<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model {

    protected $fillable = [
        "id",
        "user_id",
        "description", 
        "created_at", 
        "updated_at"
    ];

    public static $rules = [
        "user_id" => "required",
        "description" => "required",
    ];

    public function user()
    {
        return $this->belongsTo("App\Users");
    }

}
