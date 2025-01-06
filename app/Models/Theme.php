<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Theme extends Model
{
    /** @use HasFactory<\Database\Factories\ThemeFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class);
    }

    public function floor(): HasMany
    {
        return $this->hasMany(Floor::class);
    }


}
