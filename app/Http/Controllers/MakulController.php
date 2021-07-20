<?php

namespace App\Http\Controllers;

use App\Makul;
use Illuminate\Http\Request;
use Alert;

class MakulController extends Controller
{
    public function index()
    {
        $makul = Makul::all();
        return view('makul.index', compact('makul'));
    }

    public function create()
    {
        return view('makul.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Makul::create($request->all());
        toast('Yeay Data Berhasil Disimpan', 'success');
        return redirect()->route('makul');
    }

    public function Edit($id)
    {
        $makul = Makul::find($id);
        return view('makul.edit', compact('makul'));
    }

    public function update(Request $request, $id)
    {
        $makul = Makul::find($id);
        $makul->update($request->all());
        toast('Yeay Data Berhasil Diedit', 'success');
        return redirect()->route('makul');
    }
    
    public function destroy($id)
    {
        $makul = Makul::find($id);
        $makul->delete();
        toast('Yeay Data Berhasil Dihapus', 'success');
        return redirect()->route('makul');
    }
}
