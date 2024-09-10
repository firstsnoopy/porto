<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Projects::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Projects::get();
        return view('admin.projects.create', compact('projects'));
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
        Projects::create([
            'judul' => $request->judul,
            'gambar' => $gambar,
            'deskripsi' => $request->deskripsi,
            'developer' => $request->developer
        ]);



        return redirect()->to('projects');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projects $projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $projects = Projects::find($id);
        return view('admin.projects.edit', compact('projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projects $projects, $id)
    {
        $projects = Projects::find($id);
        $data = $request->validate([
            'judul' => 'required|nullable',
            'gambar' => 'nullable',
            'deskripsi' => 'required|string',
            'developer' => 'required|string',
        ]);
        if ($request->hasFile('gambar')) {
            if ($projects->gambar) {
                Storage::disk('public')->delete($projects->gambar);
            }
            $data['gambar'] = $request->gambar->store('images', 'public');
        } else {
            $data['gambar'] = $projects->gambar;
        }
        $projects->update($data);
        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        $projects = Projects::findOrFail($id);
        $projects->forceDelete();
        if ($projects->picture) {
            Storage::delete('public/image/' . $projects->picture);
        }

        return redirect()->route('projects.index')->with('success', 'Data Dihapus Permanen');
    }
}
