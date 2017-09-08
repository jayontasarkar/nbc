<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Area extends Model
{
    use NodeTrait;

    protected $fillable = [
        'name', 'tag'
    ];

    public function verifications()
    {
        return $this->hasMany(Varification::class, 'district_id');
    }
}
