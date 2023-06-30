<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipeMobil;

class TipeMobilController extends Controller
{
    function index()
    {
        $TipeMobilData = TipeMobil::get();
        return view('pages.tipemobil.index',compact('TipeMobilData'));
    }

    function store(Request $request)
    {
        $TipeMobilData = $request->validate([
            'tipe'=> 'required',
        ]);

        TipeMobil::create($TipeMobilData);
        return redirect()-> to('/tipemobil');
    }

    function create()
    {
        return view('pages.tipemobil.create');
    }

    function update($id, Request $request)
    {
        $validasiTipeMobil = $request->validate([
            'tipe' => 'required'
        ]);

        //$tipeMobilData = TipeMobil::find($id);
        //$TipeMobilData->update($validasitipeMobil);
        TipeMobil::find($id)->update($validasiTipeMobil);
        return redirect()->to('/tipemobil');    
    }

    function edit($id)
    {
        $TipeMobilData = TipeMobil:: find($id);
        return view('pages.tipemobil.edit', compact('TipeMobilData'));
    }

    function delete($id)
    {
        //$TipeMobilData = TipeMobil::find($id);
        //$TipeMobilData ->delete();
        TipeMobil::find($id)->delete();

        return redirect()->to('/tipemobil');
    }
}
