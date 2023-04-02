<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataObat;

class DataobatController extends Controller
{
    //
    public function index(){
        $obats = DataObat::all();
        return view('index', compact('obats'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $request->validate([
            'kode' => 'required',
            'name' => 'required',
            'deskripsi' => 'required',
            'tipe' => 'required',
            'jumlah' => 'required',
            'harga_satuan' => 'required'
        ]);
        DataObat::create($request->all());
        return redirect()->route('index')->with('success', 'Obat Berhasil Dibuat');
    }

    public function edit(Request $request, $id){
        $obat = DataObat::find($id);
        return view('update', compact('obat'));
    }

    public function update(Request $request){
        $obat = DataObat::find($request->id);
        $obat->name = $request->name;
        $obat->deskripsi = $request->deskripsi;
        $obat->tipe = $request->tipe;
        $obat->jumlah = $request->jumlah;
        $obat->harga_satuan = $request->harga_satuan;
        $obat->save(); 
        return redirect()->route('index')->with('success', 'Data Obat Berhasil Diubah');
    }

    public function delete(Request $request)
    {
        $obat = DataObat::find($request->id);
        $obat->delete();
        return redirect()->route('index')->with('success', 'Data Obat Berhasil Dihapus');
    }
}
