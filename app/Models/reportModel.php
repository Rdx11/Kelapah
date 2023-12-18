<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reportModel extends Model
{
    protected $table = 'report';
    protected $primaryKey = 'id_report';
    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'title',
        'description',
        'attachment',
        'id_category',
        'location_report',
        'status',
        'date_report',
    ];

    protected $casts = [
        'date_report' => 'date',
    ];
}
