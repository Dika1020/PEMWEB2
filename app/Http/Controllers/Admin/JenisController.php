<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function index()
    {
        //$positions = DB::select('SELECT * FROM positions');
        $jenis = Jenis::all();

        //dd($positions);

        return view('admin.jenis.index', compact('jenis'));
    }

    public function create()
    {
        return view('admin.jenis.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            "nama" => 'required'
        ]);

        if (isset($request->id)) {
            #update
            $jenis = Jenis::find($request->id);
            $jenis->update([
                "nama" => $request->nama
            ]);
        } else {
            Jenis::create($data);
        }

        return redirect()->route('jenis.index');
    }

    public function delete(string $id)
    {
        $jenis = Jenis::find($id);
        $jenis->delete();

        return redirect()->route('jenis.index');
    }

    public function edit(string $id)
    {
        $jenis = Jenis::find($id);
        if (!$jenis) {
            return redirect()->back();
        }
        return view('admin.jenis.edit', compact('jenis'));
    }
}
