<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Smartphone;

class Application extends Model
{
    function smartphones() {
        return $this->belongsToMany(Smartphone::class, 'version')
            ->as('version')
            ->withPivot('numero', 'date_sortie');
    }
}
