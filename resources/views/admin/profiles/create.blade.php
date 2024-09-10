@extends('layouts.base')
@section('content')
    <h1>Tambah User</h1>

    <form action="{{ route('profiles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_lengkap">Nama</label>
            <input type="text" name="nama" id="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="deskripsi">Pekerjaan</label>
            <input type="text" name="pekerjaan" id="pekerjaan" class="form-control">
        </div>
        <div class="mb-3">
            <label for="facebook">Facebook</label>
            <input type="url" name="facebook" id="facebook" class="form-control" placeholder="https://example.com">
        </div>
        <div class="mb-3">
            <label for="twitter">Twitter</label>
            <input type="url" name="twitter" id="twitter" class="form-control" placeholder="https://example.com">
        </div>
        <div class="mb-3">
            <label for="instagram">Instagram</label>
            <input type="url" name="instagram" id="instagram" class="form-control" placeholder="https://example.com">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">ADD</button>
            <a href="{{ url('profiles') }}" class="btn btn-secondary">back</a>
        </div>
    </form>
@endsection
