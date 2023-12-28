<?php

namespace App\Models;

use App\Traits\Excludable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory, Excludable;

    protected $fillable = [
        'name',
        'slug'
    ];

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
