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

    public function applications()
    {
        return $this->hasMany(Application::class, 'area_id');
    }

    public function countApplicationsInUpozilla()
    {
        $Ids = $this->children->pluck('id');

        return $this->applications()->whereIn('area_id', $Ids)->count();
    }
}
