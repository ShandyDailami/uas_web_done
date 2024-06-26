<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        $pj = Pengajuan::latest()->paginate(10);
        return view('index', compact('pj'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $request->validate([
            'id_pengajuan' => 'required',
            'jenis_pengajuan' => 'required',
            'tanggal_pengajuan' => 'required',
            'status' => 'required',
        ]);
        
        Pengajuan::create($request->post());

        return redirect()->route('pj.index')->with('success','Pengajuan telah berhasil.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Pengajuan 
    * @return \Illuminate\Http\Response
    */
    public function show(Pengajuan $pengajuan)
    {
        return view('show',compact('pengajuan'));
    }
}
