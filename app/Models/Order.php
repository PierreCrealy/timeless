<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;

    protected $fillable = [
        'status',

        'table_id',
        'bill_id',
    ];

    public function menus(): HasManyThrough
    {
        return $this->hasManyThrough(
            Menu::class,
            OrderComposition::class,
            'order_id',
            'id',
        );
    }

    public function table(): BelongsTo
    {
        return $this->belongsTo(Table::class);
    }

    public function bill(): BelongsTo
    {
        return $this->belongsTo(Bill::class);
    }

}
