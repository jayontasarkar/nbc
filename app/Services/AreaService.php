<?php

namespace App\Services;

use App\Area;

class AreaService
{
    public function get()
    {
        return Area::with('verifications')->get()->toTree();
    }
}
