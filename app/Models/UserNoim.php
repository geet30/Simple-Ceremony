<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNoim extends Model
{
    use HasFactory;
    protected $fillable = ['uuid', 'user_id', 'booking_id', 'preferred_name', 'person_first_name', 'family_name', 'person_other_name', 'person_name_combination', 'person_description', 'name_same_as_passport_or_driving_license', 'gender', 'occupation', 'residence_place', 'address_line_1', 'address_line_2', 'residence_town_or_city_or_suburb', 'residence_state_or_province_or_territory', 'postal_code', 'date_of_birth', 'birth_place', 'birth_document', 'birth_town_or_city_or_suburb', 'birth_state_or_province_or_territory', 'conjugal_status', 'are_parties_related', 'how_they_related', 'is_data_and_document_identical', 'birth_identical_document_first', 'birth_identical_document_number_first', 'birth_identical_document_second', 'birth_identical_document_number_second', 'birth_identical_document_issue_state', 'all_information_correct'];

    public function booking()
    {
        return $this->hasOne(Booking::class, 'id', 'booking_id');
    }
    public function birthDocument()
    {
        return $this->hasOne(UserDocument::class, 'user_noim_id', 'id')->where('document_type', 1);
    }
    public function signedDocumentDetail()
    {
        return $this->hasOne(BookingDetails::class, 'booking_id', 'booking_id');
    }
    public function divorceOrWidowedDocument()
    {
        return $this->hasOne(UserDocument::class, 'user_noim_id', 'id')->where('document_type', 2);
    }
    public function witness()
    {
        return $this->hasMany(UserWitness::class, 'user_id', 'user_id');
    }
    public function parents()
    {
        return  $this->hasMany(UserParent::class, 'user_noim_id', 'id');
    }
    public function marriageDocument()
    {
        return $this->hasOne(UserMarriageDocument::class, 'booking_id', 'booking_id');
    }
    public function marriageDocumentPdfNoim()
    {
        return $this->hasOne(UserMarriagePdf::class, 'booking_id', 'booking_id')->where('document_name', 'noim');
    }
    public function marriageDocumentPdfOfficialMarriageCertificate()
    {
        return $this->hasOne(UserMarriagePdf::class, 'booking_id', 'booking_id')->where('document_name', 'offical-certificate-of-marriage');
    }
    public function marriageDocumentPdfdeclarationOfNoLegalImpedimentToMarriage()
    {
        return $this->hasOne(UserMarriagePdf::class, 'booking_id', 'booking_id')->where('document_name', 'declaration-of-no-legal-impediment-to-marriage');
    }
    public function userDetail()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
