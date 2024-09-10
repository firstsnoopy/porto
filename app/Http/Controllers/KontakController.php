<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontaks = Kontak::all();
        return view('admin.kontak.index', compact('kontaks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kontaks = Kontak::get();
        return view('admin.kontak.create', compact('kontaks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kontak::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'isi' => $request->isi,
        ]);



        return redirect()->to('kontak');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kontak $kontak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kontak $kontak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kontak $kontak)
    {
        $kontak->delete();
        return redirect()->route('kontak.index');
    }
}
