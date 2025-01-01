<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderComposition extends Model
{
    /** @use HasFactory<\Database\Factories\OrderCompositionFactory> */
    use HasFactory;

    protected $fillable = [
        'order_id',
        'menu_id',
    ];

    // public function order(): HasOne
    // {
    //     return $this->hasOne(Order::class);
    // }

    // public function menu(): HasOne
    // {
    //     return $this->hasOne(Menu::class);
    // }
}
