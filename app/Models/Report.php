<?php

namespace App\Models;

use App\Traits\Excludable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Report extends Model
{
    use HasFactory, Excludable;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'photo',
        'location',
        'status'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function event(): HasOne
    {
        return $this->hasOne(Event::class);
    }
}
