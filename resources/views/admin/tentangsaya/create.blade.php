@extends('layouts.base')
@section('content')
    <h1>Tentang Saya</h1>

    <form action="{{ route('tentangsaya.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="deskripsi">deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" class="form-control">
        </div>
        <div class="mb-3">
            <label for="pengalaman">pengalaman</label>
            <input type="text" name="pengalaman" id="pengalaman" class="form-control">
        </div>
        <div class="mb-3">
            <label for="pendidikan">pendidikan</label>
            <input type="text" name="pendidikan" id="pendidikan" class="form-control">
        </div>
        <div class="mb-3">
            <label for="skills">Skills</label>
            <input type="text" name="skills" id="skills" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">ADD</button>
            <a href="{{ url('tentangsaya.index') }}" class="btn btn-secondary">back</a>
        </div>
    </form>
@endsection
