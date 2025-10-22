<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewLead extends Model
{
    use HasFactory;

    protected $fillable = [
        'surname',
        'given_name',
        'gender',
        'marital_status',
        'date_of_birth',
        'country_of_origin',
        'lead_assigned_to',

        'address',
        'city',
        'state',
        'pincode',

        'mail_address',
        'mail_city',
        'mail_state',
        'mail_pincode',

        'primary_phone',
        'secondary_phone',
        'work_phone',
        'other_phone',
        'email',
        'other_email',
        'social_media',
    ];


    public function passport() { return $this->hasOne(NewLeadPassport::class); }
    public function visaStatuses() { return $this->hasMany(NewLeadVisaStatus::class); }
    public function relatives() { return $this->hasMany(NewLeadRelative::class); }
    public function family() { return $this->hasOne(NewLeadFamily::class); }
    public function educations() { return $this->hasMany(NewLeadEducation::class); }
    public function clientPreference() { return $this->hasOne(NewLeadClientPreference::class); }
    public function jobs() { return $this->hasMany(NewLeadJob::class); }
    public function properties() { return $this->hasMany(NewLeadProperty::class); }
    public function financialStatus() { return $this->hasOne(NewLeadFinancialStatus::class); }
    public function travels() { return $this->hasMany(NewLeadTravel::class); }

}
