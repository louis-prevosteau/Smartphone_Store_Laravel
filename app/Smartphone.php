<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\user;

class Smartphone extends Model
{
    protected $table = 'smartphones';

    function users(){
        return $this->belongsTo(User::class);
    }
}
