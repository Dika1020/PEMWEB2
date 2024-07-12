<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan;
use App\Models\Jenis;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraans = Kendaraan::with('jenis')->get();
        return view('admin.kendaraan.index', compact('kendaraans'));
    }

    public function create()
    {
        $jenis = Jenis::all();
        return view('admin.kendaraan.create', compact('jenis'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'merk' => 'required|string|max:30',
            'pemilik' => 'required|string|max:40',
            'nopol' => 'required|string|max:20',
            'thn_beli' => 'required|integer',
            'deskripsi' => 'required|string|max:200',
            'kapasitas_kursi' => 'required|integer',
            'rating' => 'required|integer',
            'jenis_id' => 'required|exists:jenis,id',
        ]);

        Kendaraan::create($validatedData);

        return redirect()->route('kendaraan.index');
    }

    public function edit($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $jenis = Jenis::all();
        return view('admin.kendaraan.edit', compact('kendaraan', 'jenis'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'merk' => 'required|string|max:30',
            'pemilik' => 'required|string|max:40',
            'nopol' => 'required|string|max:20',
            'thn_beli' => 'required|integer',
            'deskripsi' => 'required|string|max:200',
            'kapasitas_kursi' => 'required|integer',
            'rating' => 'required|integer',
            'jenis_id' => 'required|exists:jenis,id',
        ]);

        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->update($validatedData);

        return redirect()->route('kendaraan.index');
    }

    public function delete($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->delete();

        return redirect()->route('kendaraan.index');
    }

    public function welcome()
    {
        $kendaraans = Kendaraan::with('jenis')->get();
        $jenis = Jenis::all();
        return view('welcome', compact('kendaraans', 'jenis'));
    }
}
