@extends('layouts.base')
@section('content')
    <h1>Tambah User</h1>

    <form action="{{ route('kontak.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_lengkap">Nama</label>
            <input type="text" name="nama" id="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control">
        </div>
        <div class="mb-3">
            <label for="no_telpon">No Telpon</label>
            <input type="number" name="no_telp" id="no_telp" class="form-control">
        </div>
        <div class="mb-3">
            <label for="isi">Isi</label>
            <input type="text" name="isi" id="isi" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">ADD</button>
            <a href="{{ url('kontak') }}" class="btn btn-secondary">back</a>
        </div>
    </form>
@endsection
