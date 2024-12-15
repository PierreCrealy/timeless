<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BookService extends Model
{
    /** @use HasFactory<\Database\Factories\BookServiceFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_id',
    ];

    public function service(): HasOne
    {
        return $this->hasOne(
            Service::class,
            'id',
            'service_id'
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
