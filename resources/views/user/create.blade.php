{{-- @extends('layout')
@section('content')
    <h1>Tambah User</h1>

    <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_lengkap">Nama</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
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
            <button type="submit" class="btn btn-primary">ADD</button>
            <a href="{{ url('profile') }}" class="btn btn-secondary">back</a>
        </div>
    </form>
@endsection --}}
