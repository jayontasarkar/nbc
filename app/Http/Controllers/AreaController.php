<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;

class AreaController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $areas = Area::with('verifications')->get()->toTree();

        return view('areas.index', compact('areas'));
    }

    public function show(Area $area)
    {
        $area->load('verifications');

        return view('areas.show', compact('area'));
    }
}
