<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    public function index()
    {
        // Mengambil semua employee beserta posisinya
        $employees = Employee::with('position')->get();
        
        return view('admin.employees.index', compact('employees'));
    }

    public function create()
    {
        // Mengambil semua posisi untuk ditampilkan di form create
        $positions = Position::all();
        return view('admin.employees.create', compact('positions'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $data = $request->validate([
            "nama" => 'required',
            "alamat" => 'required',
            "nohp" => 'required',
            "email" => 'required|email',
            "positions_id" => 'required|exists:positions,id'
        ]);

        // Jika request memiliki ID, lakukan update
        if ($request->has('id')) {
            $employee = Employee::find($request->id);
            if ($employee) {
                $employee->update($data);
            }
        } else {
            // Jika tidak ada ID, lakukan create
            Employee::create($data);
        }

        // Redirect ke halaman index employee
        return redirect()->route('employees.index');
    }

    public function edit(string $id)
{
    $employee = Employee::find($id);
    if (!$employee) {
        return redirect()->route('admin.employees.index')->with('error', 'Employee not found');
    }
    
    $positions = Position::all();
    return view('admin.employees.edit', compact('employee', 'positions'));
}

    public function delete(string $id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect()->route('employees.index');
    }
}