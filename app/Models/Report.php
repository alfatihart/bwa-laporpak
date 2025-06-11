<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'resident_id',
        'report_category_id',
        'title',
        'description',
        'image',
        'status',
    ];

    public function resident()
    {
        // satu report dimiliki oleh satu resident
        return $this->belongsTo(Resident::class);
    }

    public function category()
    {
        // satu report dimiliki oleh satu kategori report
        return $this->belongsTo(ReportCategory::class);
    }

    public function status()
    {
        // satu report memiliki banyak status
        return $this->hasMany(ReportStatus::class);
    }
}
