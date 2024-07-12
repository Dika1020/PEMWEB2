<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kampus;
use Illuminate\Http\Request;

class KampusController extends Controller
{
    public function index()
    {
        $kampuss = Kampus::all();
        return view('admin.kampus.index', compact('kampuss'));
    }

    public function create()
    {
        return view('admin.kampus.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:20',
            'alamat' => 'required|string|max:45',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);

        Kampus::create($validatedData);

        return redirect()->route('kampus.index');
    }

    public function edit($id)
    {
        $kampus = Kampus::findOrFail($id);
        return view('admin.kampus.edit', compact('kampus'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:20',
            'alamat' => 'required|string|max:45',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);

        $kampus = Kampus::findOrFail($id);
        $kampus->update($validatedData);

        return redirect()->route('kampus.index');
    }

    public function delete($id)
    {
        $kampus = Kampus::findOrFail($id);
        $kampus->delete();

        return redirect()->route('kampus.index');
    }
}
