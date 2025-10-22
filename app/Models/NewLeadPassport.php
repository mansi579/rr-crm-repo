<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewLeadPassport extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'new_lead_id',
        'passport_number',
        'issuing_country',
        'city_used',
        'issue_date',
        'expire_date',
        'is_lost',
        'lost_history',
    ];
}
