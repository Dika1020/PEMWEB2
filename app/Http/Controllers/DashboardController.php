<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Dashboard";
        $name = "dika";
        $nim = "0110223308";
        $dataPribadi = [
            [
                'nama' => $name,
                'nim' => $nim
            ],
            [
                'nama' => "Adi",
                'nim' => 12345
            ]
        ];
        return view('dashboard.index', [
            'titles' => "Dashboard",
            'dataPribadi' => $dataPribadi
        ]);
    }
            
    public function laporan()
    {
        $title = "Laporan Program Studi";
        $tahun = 2024;
        $data_mhs = [
            ["prodi" => "SI", "jumlah" => 860],
            ["prodi" => "TI", "jumlah" => 976],
            ["prodi" => "BD", "jumlah" => 78]
        ];

        return view('dashboard.laporan', compact('title', 'tahun', 'data_mhs'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}