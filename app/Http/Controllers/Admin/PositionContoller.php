<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PositionContoller extends Controller
{
    public function index()
    {
        // $positions = DB::select('SELECT * FROM positions');
        $positions = Position::all();
        // dd($positions);

        return view('admin.positions.index', compact('positions'));
    }

    public function create()
    {
        return view('admin.positions.create');;
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            "nama" => 'required'
        ]);

        if (isset($request->id)) {
            #update
            $position = Position::find($request->id);
            $position->update([
                "nama" => $request->nama
            ]);
        } else {
            Position::create($data);
        }

        return redirect()->route('position.index');
    }

    public function delete(string $id)
    {
        $position = Position::find($id);
        $position->delete();

        return redirect()->route('position.index');
    }

    public function edit(string $id)
    {
        $position = Position::find($id);
        if (!$position) {
            return redirect()->back();
        }
        return view('admin.positions.edit', compact('position'));
    }
}