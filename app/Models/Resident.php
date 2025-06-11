<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resident extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'avatar',
    ];

    public function user()
    {
        // satu resident dimiliki oleh satu user
        return $this->belongsTo(User::class);
    }

    public function reports()
    {
        // satu resident memiliki banyak report
        return $this->hasMany(Report::class);
    }
}
