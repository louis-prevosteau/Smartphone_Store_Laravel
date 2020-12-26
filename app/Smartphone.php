<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Application;

class Smartphone extends Model
{
    protected $table = 'smartphones';

    function users(){
        return $this->belongsTo(User::class);
    }

    function applications() {
        return $this->belongsToMany(Application::class, 'version')
            ->as('version')
            ->withPivot('numero', 'date_sortie');
    }
}
