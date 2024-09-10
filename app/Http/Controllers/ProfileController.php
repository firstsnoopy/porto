<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Profile::all();
        return view('admin.profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profiles = Profile::get();
        return view('admin.profiles.create', compact('profiles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->gambar->store('images', 'public');
        }
        Profile::create([
            'nama' => $request->nama,
            'gambar' => $gambar,
            'email' => $request->email,
            'pekerjaan' => $request->pekerjaan,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
        ]);



        return redirect()->to('profiles');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        return view('admin.profiles.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $profiles = Profile::find($id);
        $data = $request->validate([
            'nama' => 'required|nullable',
            'gambar' => 'nullable',
            'email' => 'required|string|',
            'pekerjaan' => 'required|string',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
        ]);
        if ($request->hasFile('gambar')) {
            if ($profiles->gambar) {
                Storage::disk('public')->delete($profiles->gambar);
            }
            $data['gambar'] = $request->gambar->store('images', 'public');
        } else {
            $data['gambar'] = $profiles->gambar;
        }
        $profiles->update($data);
        return redirect()->route('profiles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {

        $profile->delete();
        return redirect()->route('profiles.index');
    }
}
