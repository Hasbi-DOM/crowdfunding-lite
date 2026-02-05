<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'target_amount',
        'current_amount',
        'end_date',
        'category'
    ];

    public function Donation()
    {
        return $this->hasMany(Donation::class);
    }

    public function Bank()
    {
        return $this->hasOne(Bank::class);
    }

    public function getDaysLeftAttribute() // get duration fundraising
    {
        return Carbon::today()->diffInDays(
            Carbon::parse($this->end_date)
        );
    }

    public function getFundraisingProgressAttribute()
    {
        return $this->current_amount / $this->target_amount * 100; // get fundraising progress
    }
}
