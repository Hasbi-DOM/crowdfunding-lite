<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = [
        'id',
        'donation_id',
        'name',
        'account_number',
        'account_name',
        'created_at',
        'updated_at'
    ];

    public function Donation () 
    {
        return $this->hasOne(Donation::class);
    }
}
