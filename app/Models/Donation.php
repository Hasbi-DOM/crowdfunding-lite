<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'id',
        'campaign_id',
        'donatur_name',
        'amount',
        'image',
        'is_verified',
        'created_at',
        'updated_at'
    ];

    public function Campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function Bank()
    {
        return $this->hasOne(Bank::class);
    }
}
