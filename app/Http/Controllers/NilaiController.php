<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Mahasiswa;
use App\User;
use Illuminate\Http\Request;
use Alert;
use App\Makul;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::with(['mahasiswa', 'makul', 'user'])->get();
        return view('nilai.index', compact('nilai'));
    }

    public function create()
    {
        $user = User::all();
        $makul = Makul::all();
        return view('nilai.create', compact('user','makul'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Nilai::create($request->all());
        toast('Yeay Data Berhasil Disimpan', 'success');
        return redirect()->route('nilai');
    }

    public function Edit($id)
    {
        $makul = Makul::all();
        $user = User::all();
        // $mahasiswa = Mahasiswa::all();
        $nilai = nilai::find($id);
        return view('nilai.edit', compact('nilai', 'makul', 'user'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        toast('Yeay Data Berhasil Diedit', 'success');
        return redirect()->route('nilai');
    }

    public function destroy($id)
    {
        $nilai = Nilai::find($id);
        $nilai->delete();
        toast('Yeay Data Berhasil Dihapus', 'success');
        return redirect()->route('nilai');
    }
}
