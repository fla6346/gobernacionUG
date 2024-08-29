<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EventoAdverso extends Model
{
    use HasFactory;

    
    public function usuario():BelongsToMany
    {
        return $this->belongToMany(User::class);
    }
    public function region():BelongsToMany
    {
        return $this->belongToMany(Region::class);
    }
    public function responsable():BelongsToMany
    {
        return $this->belongToMany(Responsable::class);
    }
    public function alerta():HasMany
    {
        return $this->hasMany(Alerta::class);
    }
}
