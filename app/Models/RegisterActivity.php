<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class RegisterActivity extends Model
{
    /** @use HasFactory<\Database\Factories\RegisterActivityFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'activity_id',
    ];

    public function activity(): HasOne
    {
        return $this->hasOne(
            Activity::class,
            'id',
            'activity_id'
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
