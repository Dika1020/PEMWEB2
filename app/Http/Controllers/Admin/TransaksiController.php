<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use App\Models\Kendaraan;
use App\Models\Area_parkir;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::with('kendaraan', 'area_parkir')->get();
        return view('admin.transaksi.index', compact('transaksis'));
    }

    public function create()
    {
        $kendaraans = Kendaraan::all();
        $area_parkirs = Area_parkir::all();
        return view('admin.transaksi.create', compact('kendaraans', 'area_parkirs'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'mulai' => 'required|date_format:H:i',
            'akhir' => 'required|date_format:H:i',
            'keterangan' => 'nullable|string|max:200',
            'biaya' => 'required|numeric',
            'kendaraan_id' => 'required|exists:kendaraan,id',
            'area_parkir_id' => 'required|exists:area_parkir,id',
        ]);

        $validatedData['mulai'] = substr($validatedData['mulai'], 0, 5);
        $validatedData['akhir'] = substr($validatedData['akhir'], 0, 5);

        Transaksi::create($validatedData);

        return redirect()->route('transaksi.index');
    }

    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $kendaraans = Kendaraan::all();
        $area_parkirs = Area_parkir::all();
        return view('admin.transaksi.edit', compact('transaksi', 'kendaraans', 'area_parkirs'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'mulai' => 'required|date_format:H:i',
            'akhir' => 'required|date_format:H:i',
            'keterangan' => 'nullable|string|max:200',
            'biaya' => 'required|numeric',
            'kendaraan_id' => 'required|exists:kendaraan,id',
            'area_parkir_id' => 'required|exists:area_parkir,id',
        ]);

        $validatedData['mulai'] = substr($validatedData['mulai'], 0, 5);
        $validatedData['akhir'] = substr($validatedData['akhir'], 0, 5);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update($validatedData);

        return redirect()->route('transaksi.index');
    }

    public function delete($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('transaksi.index');
    }
}
