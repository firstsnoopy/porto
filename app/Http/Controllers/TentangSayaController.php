<?php

namespace App\Http\Controllers;

use App\Models\Tentang_Saya;
use Illuminate\Http\Request;

class TentangSayaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tentangsaya = Tentang_Saya::all();
        return view('admin.tentangsaya.index', compact('tentangsaya'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tentangsaya = Tentang_Saya::get();
        return view('admin.tentangsaya.create', compact('tentangsaya'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Tentang_Saya::create([
            'deskripsi' => $request->deskripsi,
            'pengalaman' => $request->pengalaman,
            'pendidikan' => $request->pendidikan,
            'skills' => $request->skills,
        ]);

        return redirect()->to('tentangsaya');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tentang_Saya $tentang_Saya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tentang_Saya $tentang_Saya, $id)
    {
        $tentang_Saya = Tentang_Saya::find($id);
        return view('admin.tentangsaya.edit', compact('tentang_Saya'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tentang_Saya $tentang_Saya, $id)
    {
        $tentang_Saya = Tentang_Saya::find($id);
        $data = $request->validate([
            'deskripsi' => 'required|string',
            'pengalaman' => 'required|nullable|',
            'pendidikan' => 'required|nullable|',
            'skills' => 'required|string',
        ]);
        $tentang_Saya->update($data);
        return redirect()->route('tentangsaya.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tentang_Saya $tentang_Saya)
    {
        $tentang_Saya->delete();
        return redirect()->route('tentang_Saya.index');
    }
}
