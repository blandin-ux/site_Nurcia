<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{

    public function index()
    {
        $regions = Region::all();
        return view('admin.region.index')->with(compact('regions'));
    }

    public function store(Request $request)
    {
        $region = new Region();
        $region->ville = $request->designation;
        $region->save();
        return redirect()->back();
    }


    public function autoUser()
    {
        dd("Auto User Tokoss...!!!!");
    }


}
