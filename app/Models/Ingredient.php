<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Ingredient extends Model
{
    /** @use HasFactory<\Database\Factories\IngredientFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'delivery_date',
        'stock',
        'origin',
    ];
    public function dishes(): BelongsToMany
    {
        return $this->belongsToMany(
            Dish::class,
            DishComposition::class,
        );

    }
}
