@extends('layouts.base')
@section('content')
    <form action="{{ route('projects.update', $projects->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        {{-- <div class="mb-3">
            <label for="picture">Photo</label>
            <input type="file" name="picture" id="picture" class="form-control">
            <img src="{{ asset('storage/image/' . $profile->picture) }}" alt="" width="50" height="50">
        </div> --}}
        <div class="mb-3">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ $projects->judul }}">
        </div>
        <div class="mb-3">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control" value="">
            <img src="{{ asset('storage/' . $projects->gambar) }}" width="100px" alt="" class="rounded-circle">
        </div>
        <div class="mb-3">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{ $projects->deskripsi }}">
        </div>
        <div class="mb-3">
            <label for="developer">Developer</label>
            <textarea name="developer" id="developer" class="form-control">{{ $projects->developer }}</textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ url('projects.index') }}">Back</a>
        </div>
    </form>
@endsection
