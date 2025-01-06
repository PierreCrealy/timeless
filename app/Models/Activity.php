<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
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

    public function type(): BelongsTo
    {
        return $this->belongsTo(TypeActivity::class);
    }

    public function theme(): BelongsTo
    {
        return $this->belongsTo(Theme::class);
    }

    public function registrations(): HasMany
    {
        return $this->hasMany(RegisterActivity::class);
    }


    public function users(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            RegisterActivity::class,
        );

    }
}
