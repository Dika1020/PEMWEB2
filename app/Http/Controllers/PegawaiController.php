<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = [
            (object) ['nama' => 'Indika', 'jabatan' => 'Manajer', 'email' => 'indika@gmail.com', 'telepon' => '0812-4565-2112'],
            (object) ['nama' => 'Doni', 'jabatan' => 'Staff', 'email' => 'doni@gmail.com', 'telepon' => '0822-3453-6532'],
            (object) ['nama' => 'almah', 'jabatan' => 'Supervisor', 'email' => 'almah@gmail.com', 'telepon' => '0813-5532-8892'],
            
        ];

        // Mengirim data pegawai ke view 'pegawai.index'
        return view('pegawai.index', compact('pegawais'));
    }
}