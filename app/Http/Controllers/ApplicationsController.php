<?php

namespace App\Http\Controllers;

use App\Application;
use App\Area;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    public function create()
    {
        $areas = Area::get()->toTree();

        return view('applications.create', compact('areas'));
    }

    public function store(Request $request)
    {
        $application = Application::create($request->all());
        if ($request->hasFile('library_picture')) {
            $image = $request->file('library_picture');
            $imageExtention = $image->getClientOriginalExtension();
            $imageName = $time.'.'.$imageExtention;
            $image->move(
                base_path() . '/public/uploads/',
                $imageName
            );
            $application->library_picture = $imageName;
            $application->save();
        }

        return redirect()->route('applications.confirmation')
            ->withSuccess('গ্রন্থাগারে অনুদানের জন্য আবেদনপত্র গ্রহণ করা হয়েছে |');
    }

    public function confirm()
    {
        return view('applications.confirm');
    }
}
