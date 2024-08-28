<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EventoAdverso extends Model
{
    use HasFactory;

public function usuario():BelongsToMany
{
    return $this->belongToMany(User::class);
}

}
