<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kyc extends Model
{
    protected $fillable = [
        'user_id',
        'full_name',
        'nid_number',
        'dob',
        'address',
        'nid_front',
        'nid_back',
        'selfie',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
