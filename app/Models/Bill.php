<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bill extends Model
{
    /** @use HasFactory<\Database\Factories\BillFactory> */
    use HasFactory;

    protected $fillable = [
        'reference',
        'price',
        'pay_date',
        'pay_method',
    ];

    public function order(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
