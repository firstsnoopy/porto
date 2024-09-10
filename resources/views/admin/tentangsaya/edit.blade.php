@extends('layouts.base')
@section('content')
    <form action="{{ route('tentangsaya.update', $tentang_Saya->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        {{-- <div class="mb-3">
            <label for="picture">Photo</label>
            <input type="file" name="picture" id="picture" class="form-control">
            <img src="{{ asset('storage/image/' . $profile->picture) }}" alt="" width="50" height="50">
        </div> --}}
        <div class="mb-3">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{$tentang_Saya->deskripsi}}">
        </div>
        <div class="mb-3">
            <label for="pengalaman">Pengalaman</label>
            <input type="text" name="pengalaman" id="pengalaman" class="form-control" value="{{$tentang_Saya->pengalaman}}">
        </div>
        <div class="mb-3">
            <label for="pendidikan">Pendidikan</label>
            <input type="text" name="pendidikan" id="pendidikan" class="form-control" value="{{$tentang_Saya->pendidikan}}">
        </div>
        <div class="mb-3">
            <label for="skills">Skills</label>
            <input type="text" name="skills" id="skills" class="form-control" value="{{$tentang_Saya->skills}}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ url('tentangsaya.index') }}">Back</a>
        </div>
    </form>
@endsection
