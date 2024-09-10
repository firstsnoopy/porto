@extends('layouts.base')
@section('content')
    <h1>Projects</h1>

    <div class="card">
        <div class="card-header">Projects</div>
        <div class="card-body">


            {{-- {{ route('profiles.recycle') }} --}}
            <a href="{{ route('projects.create') }}" class="btn btn-primary btn-sm mb-2">ADD</a>
            <div class="table table-responsive">
                <div class="table table-bordered text-center">
                    <table class="table table-bordered">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th>Deskripsi</th>
                                <th>Developer</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $index => $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td><img src="{{ asset('storage/' . $item->gambar) }}" width="100px" alt=""
                                            class="rounded-circle">
                                    </td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>{{ $item->developer }}</td>

                                    {{-- {{ route('user.edit', $item->id)}} --}}

                                    <td class="justify-content-center"><a href="{{ route('projects.edit', $item->id) }}"
                                            class="btn btn-success btn-sm">Edit</a>
                                        <form style="display: inline;" action="{{ route('projects.destroy', $item->id) }}"
                                            onsubmit="return confirm('akan di delete sementara?');" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
