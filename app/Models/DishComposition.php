<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\HasOne;

class DishComposition extends Model
{
    /** @use HasFactory<\Database\Factories\DishCompositionFactory> */
    use HasFactory;

    protected $fillable = [
        'dish_id',
        'ingredient_id'
    ];

    // public function dish(): HasOne
    // {
    //     return $this->hasOne(Dish::class);
    // }

    // public function ingredient(): HasOne
    // {
    //     return $this->hasOne(Ingredient::class);
    // }
}
