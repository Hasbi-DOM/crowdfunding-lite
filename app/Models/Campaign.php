<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'image',
        'target_amount',
        'current_amount',
        'created_at',
        'updated_at'
    ];

    public function Donation()
    {
        return $this->hasMany(Donation::class);
    }
}
