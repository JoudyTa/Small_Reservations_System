<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Re extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name', 'last_name',
        'phone_number', 'date_of_birth',
        'gender_id', 'country_of_residency_id',
        'passport_no', 'issue_date',
        'expiry_date', 'place_of_issue_id',
        'arrival_date', 'profession',
        'organization', 'visa_duration',
        'visa_status_id', 'passport_picture',
        'personal_picture', 'with_companion',
        'check_in_date', 'check_out_date',
        'rom_type_id', 'user_id',

    ];
}
