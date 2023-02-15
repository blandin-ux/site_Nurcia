<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tarif;
use Illuminate\Http\Request;

class TarifController extends Controller
{

    public function index()
    {
        $tarifs = Tarif::all();
        return view('admin.tarif.index')->with(compact('tarifs'));
    }


    public function store()
    {
        $tarif = new Tarif();
        $tarif->prix = request()->prix;
        $tarif->save();
        return redirect()->back();
    }
}
