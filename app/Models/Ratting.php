<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ratting extends Model
{
    protected $table='rattings';
    protected $fillable=['user_id','ratting','comment'];

    public function users(){
        return $this->hasOne('App\User','id','user_id');
    }
}