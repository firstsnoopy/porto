@extends('layouts.base')
@section('content')
    <h1>Profile</h1>

    <div class="card">
        <div class="card-header">Profiles</div>
        <div class="card-body">


            {{-- {{ route('profiles.recycle') }} --}}
            <a href="{{ route('profiles.create') }}" class="btn btn-primary btn-sm mb-2">ADD</a>
            <div class="table table-responsive">
                <div class="table table-bordered text-center">
                    <table class="table table-bordered">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Gambar</th>
                                <th>Email</th>
                                <th>Pekerjaan</th>
                                <th>Facebook</th>
                                <th>Twitter</th>
                                <th>Instagram</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($profiles as $index => $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td><img src="{{ asset('storage/' . $item->gambar) }}" width="100px" alt=""
                                            class="rounded-circle">
                                    </td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->pekerjaan }}</td>
                                    <td>{{ $item->facebook }}</td>
                                    <td>{{ $item->twitter }}</td>
                                    <td>{{ $item->instagram }}</td>

                                    {{-- {{ route('user.edit', $item->id)}} --}}

                                    <td class="justify-content-center"><a href="{{ route('profiles.edit', $item->id) }}"
                                            class="btn btn-success btn-sm">Edit</a>
                                        <form style="display: inline;" action="{{ route('profiles.destroy', $item->id) }}"
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
