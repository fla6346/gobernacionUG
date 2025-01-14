<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Region extends Model
{
    use HasFactory;

   //muchas region pueden tener muchos eventos
    public function evento():BelongsToMany
    {
        return $this->belongToMany(EventoAdverso::class);
    }
    //una region tiene muchas provincias
    public function provincia():HasMany
    {
        return $this->hasMany(Provincia::class);
    }
    
}
