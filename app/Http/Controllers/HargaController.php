<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Harga;

class HargaController extends Controller
{
    public function index()
    {
        $hargas = Harga::all();
        return view('harga', compact('hargas'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:hargas,kode',
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable'
        ]);

        $harga = new Harga();
        $harga->kode = $request->kode;
        $harga->nama = $request->nama;
        $harga->harga = $request->harga;
        $harga->deskripsi = $request->deskripsi;
        $harga->save();
        return redirect()->route('harga.index')->with('success', 'Harga berhasil Disimpan!.');
    }

    public function edit($id)
    {
        $harga = Harga::findOrFail($id);
        return view('edit', compact('harga'));
    }

    public function update(Request $request, $id)
    {
        $harga = Harga::findOrFail($id);
        $harga->kode = $request->kode;
        $harga->nama = $request->nama;
        $harga->harga = $request->harga;
        $harga->deskripsi = $request->deskripsi;
        $harga->save();
        return redirect()->route('harga.index')->with('success', 'Harga berhasil diupdate!.');
    }

    public function destroy($id)
    {
        $harga = Harga::findOrFail($id);
        $harga->delete();
        return redirect()->route('harga.index')->with('success', 'Harga berhasil dihapus!.');
    }
}
