<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Reservation extends Model
{
    /** @use HasFactory<\Database\Factories\ReservationFactory> */
    use HasFactory;


    /*
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    */

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
