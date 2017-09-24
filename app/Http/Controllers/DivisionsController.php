<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;

class DivisionsController extends Controller
{
    public function show(Area $area)
    {
        $area->load('applications');
        return view('divisions.show', compact('area'));
    }
}
