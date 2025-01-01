<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Activity extends Model
{
    /** @use HasFactory<\Database\Factories\ActivityFactory> */
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'start_datetime',
        'capacity',
        'price',

        'type_id',
        'theme_id',
    ];

    public function type(): HasOne
    {
        return $this->hasOne(TypeActivity::class);
    }

    public function theme(): HasOne
    {
        return $this->hasOne(Theme::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            RegisterActivity::class,
        );

    }
}
