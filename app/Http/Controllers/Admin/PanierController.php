<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Panier;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    //
    public function index()
    {
        $paniers = Panier::all();
        return view('admin.panier.index')->with(compact('paniers'));
    }

    public function store()
    {
        $panier = new Panier();
        $panier->designation = request()->designation;
        $panier->save();
        return redirect()->back();
    }

    public function update($id)
    {
        $panier = Panier::find($id);
        return view('admin.panier.update')->with(compact('panier'));
    }

    public function save()
    {
        $panier = Panier::find(request()->id);
        $panier->designation = request()->designation;
        //dd($panier);
        $panier->save();
        return redirect()->back();

    }

}
