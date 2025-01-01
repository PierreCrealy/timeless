<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;


class Menu extends Model
{
    /** @use HasFactory<\Database\Factories\MenuFactory> */
    use HasFactory;

    protected $fillable = [
        'theme',
        'description',
        'price',
        'status',
    ];

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(
            Order::class,
            OrderComposition::class,
        );

    }

    public function dishes(): HasMany
    {
        return $this->hasMany(Dish::class);
    }
}
