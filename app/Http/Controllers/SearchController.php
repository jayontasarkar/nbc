<?php

namespace App\Http\Controllers;

use App\Area;
use App\Varification;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function verifications()
    {
        $areas = Area::with('applications')->get()->toTree();

        return view('search.index', compact('areas'));
    }

    public function postVerify(Request $request)
    {
        $verification = Varification::find($request->search);

        return redirect()->route('verifications.show', [$verification]);
    }
}
