<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'campaign_id',
        'donatur_name',
        'amount',
        'message'
    ];

    public function Campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
