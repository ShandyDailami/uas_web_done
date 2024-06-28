<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        $pj = Pengajuan::latest()->paginate(10);
        return view('index', compact('pj'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pengajuan' => 'required',
            'jenis_pengajuan' => 'required',
            'tanggal_pengajuan' => 'required',
            'status' => 'required',
        ]);

        Pengajuan::create($request->post());

        return redirect()->route('pj.index')->with('success', 'Pengajuan telah berhasil.');
    }

    public function show(Pengajuan $pengajuan)
    {
        return view('show', compact('pengajuan'));
    }
}
