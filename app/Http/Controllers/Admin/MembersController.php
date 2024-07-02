<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index ()
    {
        // $members = DB::select('SELECT * FROM members');
        $members = Member::all();
        // dd($members);
    
        return view('admin.members.index', compact('members'));
    }

    public function create()
    {
        return view('admin.members.create');;
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            "nama" => 'required',
            "email" => 'required',
            "status" => 'required|in:aktif,tidak aktif',
            "alamat" => 'required',
            "gender" => 'required|in:laki-laki,perempuan'
        ]);

        if (isset($request->id)) {
            #update
            $member = Member::find($request->id);
            $member->update([
                "nama" => $request->nama,
                "email" => $request->email,
                "status" => $request->status,
                "alamat" => $request->alamat,
                "gender" => $request->gender
            ]);
        } else {
            Member::create($data);
        }

        return redirect()->route('members.index');
    }

    public function edit(string $id)
    {
        $member = Member::find($id);
        if (!$member) {
            return redirect()->back();
        }
        return view('admin.members.edit', compact('member'));
    }

    public function delete(string $id)
    {
        $member = Member::find($id);
        $member->delete();

        return redirect()->route('members.index');
    }
}
