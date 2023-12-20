<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportModel extends Model
{
    protected $table = 'report';
    protected $primaryKey = 'id_report';
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
}
