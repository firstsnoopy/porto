@extends('layouts.base')
@section('content')
    <h1>Tambah User</h1>

    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control">
        </div>
        <div class="mb-3">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" class="form-control">
        </div>
        <div class="mb-3">
            <label for="developer">Developer</label>
            <input type="text" name="developer" id="developer" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">ADD</button>
            <a href="{{ url('projects') }}" class="btn btn-secondary">back</a>
        </div>
    </form>
@endsection
