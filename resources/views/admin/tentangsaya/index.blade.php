@extends('layouts.base')
@section('content')
    <h1>About Me</h1>

    <div class="card">
        <div class="card-header">About Me</div>
        <div class="card-body">


            {{-- {{ route('profiles.recycle') }} --}}
            <a href="{{ route('tentangsaya.create') }}" class="btn btn-primary btn-sm mb-2">ADD</a>
            <div class="table table-responsive">
                <div class="table table-bordered text-center">
                    <table class="table table-bordered">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Deskripsi</th>
                                <th>Pengalaman</th>
                                <th>Pendidikan</th>
                                <th>Skills</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tentangsaya as $index => $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>{{ $item->pengalaman }}</td>
                                    <td>{{ $item->pendidikan }}</td>
                                    <td>{{ $item->skills }}</td>

                                    {{-- {{ route('user.edit', $item->id)}} --}}

                                    <td class="justify-content-center"><a href="{{ route('tentangsaya.edit', $item->id) }}"
                                            class="btn btn-success btn-sm">Edit</a>
                                        <form style="display: inline;" action="{    { route('tentangsaya.destroy', $item->id) }}"
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
