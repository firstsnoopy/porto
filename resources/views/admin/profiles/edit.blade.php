@extends('layouts.base')
@section('content')
    <form action="{{ route('profiles.update', $profile->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        {{-- <div class="mb-3">
            <label for="picture">Photo</label>
            <input type="file" name="picture" id="picture" class="form-control">
            <img src="{{ asset('storage/image/' . $profile->picture) }}" alt="" width="50" height="50">
        </div> --}}
        <div class="mb-3">
            <label for="nama-lengkap">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $profile->nama }}">
        </div>
        <div class="mb-3">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control" value="">
            <img src="{{ asset('storage/' . $profile->gambar) }}" width="100px" alt="" class="rounded-circle">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" value="{{ $profile->email }}">
        </div>
        <div class="mb-3">
            <label for="pekerjaan">Pekerjaan</label>
            <textarea name="pekerjaan" id="pekerjaan" class="form-control">{{ $profile->pekerjaan }}</textarea>
        </div>
        <div class="mb-3">
            <label for="facebook">Facebook</label>
            <input type="url" name="facebook" id="facebook" class="form-control" placeholder="https://example.com"
                value="{{ $profile->facebook }}">
        </div>
        <div class="mb-3">
            <label for="twitter">Twitter</label>
            <input type="url" name="twitter" id="twitter" class="form-control" placeholder="https://example.com"
                value="{{ $profile->twitter }}">
        </div>
        <div class="mb-3">
            <label for="instagram">Instagram</label>
            <input type="url" name="instagram" id="instagram" class="form-control" placeholder="https://example.com"
                value="{{ $profile->instagram }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ url('profiles.index') }}">Back</a>
        </div>
    </form>
@endsection
