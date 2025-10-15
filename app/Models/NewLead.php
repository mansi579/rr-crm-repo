<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewLead extends Model
{
    use HasFactory;

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
