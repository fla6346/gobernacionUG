<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Region extends Model
{
    use HasFactory;

    public function municipio():HasMany
    {
        return $this->hasMany(Municipio::class);
    }
    public function evento():BelongsToMany
    {
        return $this->belongToMany(EventoAdverso::class);
    }
    public function provincia():BelongsToMany
    {
        return $this->belongToMany(Provincia::class);
    }
    
}
