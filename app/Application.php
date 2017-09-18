<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = [
        'library_name', 'library_address', 'area_id', 'establishment_date', 'registrar_office_name', 'registration_no', 'registration_date', 'library_has_own_room', 'alternate_library_room', 'library_president_name', 'library_president_addr', 'library_president_mobile', 'library_gs_name', 'library_gs_addr', 'library_gs_mobile', 'librarian_name', 'librarian_addr', 'librarian_mobile', 'library_bank_account_title', 'library_bank_account_no', 'library_bank_branch', 'library_bank_name', 'bank_branch_upozilla', 'bank_branch_district', 'has_constitution', 'grant_year', 'grant_amount', 'grant_source', 'last_year_reading_content', 'last_year_other_activities', 'library_book_qty', 'last_year_collected_books_qty', 'last_year_collected_books_price', 'daily_newspaper_name', 'daily_readers_qty', 'current_year_expected_govt_grant', 'current_year_expected_private_grant', 'current_year_expected_govt_grant', 'current_year_expected_own_income', 'current_year_expected_membership_fee', 'library_staff_salary', 'library_furniture_exp', 'library_electricity_bill', 'library_newspaper_buy', 'library_book_buy', 'library_other_buy', 'issuer_name', 'issuer_designation', 'issuer_addr', 'issuer_mobile', 'inspector_name', 'inspector_designation', 'inspector_addr', 'inspector_mobile', 'library_picture'
    ];

    /**
     * Mutator for  establishment_date attribute.
     *
     * @return void
     */
    public function setEstablishmentDateAttribute($value)
    {
        $this->attributes['establishment_date'] = Carbon::parse($value);
    }

    /**
     * Mutator for registration_date attribute.
     *
     * @return void
     */
    public function setRegistrationDateAttribute($value)
    {
        $this->attributes['registration_date'] = Carbon::parse($value);
    }

    /**
     * Application belongs to Area.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function area()
    {
        // belongsTo(RelatedModel, foreignKey = area_id, keyOnRelatedModel = id)
        return $this->belongsTo(Area::class);
    }
}
