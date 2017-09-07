<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Varification extends Model
{
    protected $fillable = [
    	'libraby_name','vill','post_code','upozila','divison','lib_foundtaion_year','lib_description','asset_description','no_of_books','visitors_per_day','no_of_newspapers','opening_time','opening_days_week','committee','libarian_name','libarian_qualification','chairman_name','chairman_mobile','comments'
    ];
}
