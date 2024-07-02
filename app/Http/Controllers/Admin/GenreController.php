<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    public function index ()
    {
        // $genres = DB::select('SELECT * FROM genres');
        $genres = Genre::all();
        // dd($genres);

        return view('admin.genres.index', compact('genres'));
    }

    public function create()
    {
        return view('admin.genres.create');;
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            "nama" => 'required'
        ]);

        if (isset($request->id)) {
            #update
            $genre = Genre::find($request->id);
            $genre->update([
                "nama" => $request->nama
            ]);
        } else {
            genre::create($data);
        }

        return redirect()->route('genres.index');
    }

    public function delete(string $id)
    {
        $genre = Genre::find($id);
        $genre->delete();

        return redirect()->route('genres.index');
    }

    public function edit(string $id)
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return redirect()->back();
        }
        return view('admin.genres.edit', compact('genre'));
    }
}
