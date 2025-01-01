<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    public function orders(): HasManyThrough
    {
        return $this->hasManyThrough(
            Order::class,
            OrderComposition::class,
            'menu_id',
            'id',
        );
    }

    public function dishes(): HasMany
    {
        return $this->hasMany(Dish::class);
    }
}
