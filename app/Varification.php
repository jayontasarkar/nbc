<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Varification extends Model
{
    protected $fillable = [
        'libraby_name','vill','post_code','upozila','district_id','lib_foundtaion_year',
        'lib_description','asset_description','no_of_books','visitors_per_day',
        'no_of_newspapers','opening_time','opening_days_week','committee','libarian_name',
        'librarian_mobile_no', 'libarian_qualification','chairman_name','chairman_mobile',
        'lib_registration_no', 'registration_provider', 'gs_name', 'gs_mobile_no', 'picture',
        'comments'
    ];

    public function area()
    {
        return $this->belongsTo(Area::class, 'district_id');
    }
}
