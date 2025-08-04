<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kyc extends Model
{
    protected $fillable = [
        'user_id', 'nid_number', 'dob', 'address', 'nid_font', 'nid_back', 'selfie', 'status'
    ];
}
