<?php

namespace App\Models;

use App\Traits\Excludable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory, Excludable;

    protected $fillable=[
        'report_id'
    ];

    public function report(): BelongsTo
    {
        return $this->belongsTo(Report::class);
    }
}
