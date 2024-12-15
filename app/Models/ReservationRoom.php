<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ReservationRoom extends Model
{
    /** @use HasFactory<\Database\Factories\ReservationRoomFactory> */
    use HasFactory;

    protected $fillable = [
        'reservation_id',
        'room_id',
    ];

    public function room(): HasOne
    {
        return $this->hasOne(
            Room::class,
            'id',
            'room_id'
        );
    }

    public function user(): HasOne
    {
        return $this->hasOne(
            User::class,
            'id',
            'user_id'
        );
    }
}
