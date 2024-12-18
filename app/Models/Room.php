<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Room extends Model
{
    /** @use HasFactory<\Database\Factories\RoomFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'number',
        'capacity',
        'price',
        'status',

        'floor_id',
    ];


    public function floor(): BelongsTo
    {
        return $this->belongsTo(Floor::class);
    }

    public function reservations(): BelongsToMany
    {
        return $this->belongsToMany(
            Reservation::class,
            ReservationRoom::class,
        );

    }
}
