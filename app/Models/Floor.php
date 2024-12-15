<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Floor extends Model
{
    /** @use HasFactory<\Database\Factories\FloorFactory> */
    use HasFactory;

    protected $fillable = [
        'number',
        'name',

        'theme_id',
    ];

    public function theme(): HasOne
    {
        return $this->hasOne(Theme::class);
    }

    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }

}
