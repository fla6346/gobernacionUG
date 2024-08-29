<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Provincia extends Model
{
    use HasFactory;
    public function region():BelongsToMany
    {
        return $this->belongToMany(Region::class);
    }
}
