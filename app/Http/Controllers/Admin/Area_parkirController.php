<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area_parkir;
use App\Models\Kampus;
use Illuminate\Http\Request;

class Area_parkirController extends Controller
{
    public function index()
    {
        $area_parkirs = Area_parkir::with('kampus')->get();
        return view('admin.area_parkir.index', compact('area_parkirs'));
    }

    public function create()
    {
        $kampuss = Kampus::all();
        return view('admin.area_parkir.create', compact('kampuss'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:30',
            'kapasitas' => 'required|integer',
            'keterangan' => 'nullable|string|max:200',
            'kampus_id' => 'required|exists:kampus,id',
        ]);

        Area_parkir::create($validatedData);

        return redirect()->route('area_parkir.index');
    }

    public function edit($id)
    {
        $area_parkir = Area_parkir::findOrFail($id);
        $kampuss = Kampus::all();
        return view('admin.area_parkir.edit', compact('area_parkir', 'kampuss'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:30',
            'kapasitas' => 'required|integer',
            'keterangan' => 'nullable|string|max:200',
            'kampus_id' => 'required|exists:kampus,id',
        ]);

        $area_parkir = Area_parkir::findOrFail($id);
        $area_parkir->update($validatedData);

        return redirect()->route('area_parkir.index');
    }

    public function delete($id)
    {
        $areaParkir = Area_parkir::findOrFail($id);
        $areaParkir->delete();

        return redirect()->route('area_parkir.index');
    }
}
