<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReportCategory extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'image',
    ];

    public function reports()
    {
        // satu kategori report memiliki banyak report
        return $this->hasMany(Report::class);
    }
}
