<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index ()
    {
        // $users = DB::select('SELECT * FROM users');
        $users = User::all();
        // dd('users');

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');;
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            "name" => 'required',
            "email" => 'required',
            "password" => 'required'
        ]);

        if (isset($request->id)) {
            #update
            $user = User::find($request->id);
            $user->update([
                "name" => $request->name,
                "email" => $request->email,
                "password" => $request->password
            ]);
        } else {
            User::create($data);
        }

        return redirect()->route('users.index');
    }

    public function delete(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users.index');
    }

    public function edit(string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->back();
        }
        return view('admin.users.edit', compact('user'));
    }
}
