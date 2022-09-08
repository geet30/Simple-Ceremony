<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNoim extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'booking_id', 'preferred_name', 'person_first_name', 'family_name', 'person_other_name', 'person_name_combination', 'person_description', 'name_same_as_passport_or_driving_license', 'gender', 'occupation', 'residence_place', 'address_line_1', 'address_line_2', 'residence_town_or_city_or_suburb', 'residence_state_or_province_or_territory', 'postal_code', 'date_of_birth', 'birth_place', 'birth_document', 'birth_town_or_city_or_suburb', 'birth_state_or_province_or_territory', 'conjugal_status', 'are_parties_related', 'how_they_related', 'is_data_and_document_identical'];
}
