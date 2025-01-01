<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Dish extends Model
{
    /** @use HasFactory<\Database\Factories\DishFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'status',

        'menu_id'
    ];

    public function ingredients(): HasManyThrough
    {
        return $this->hasManyThrough(
            Ingredient::class,
            DishComposition::class,
            'dish_id',
            'id',
        );
    }

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }
}
