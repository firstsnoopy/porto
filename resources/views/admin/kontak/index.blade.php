@extends('layouts.base')
@section('content')
    <h1>Kontak</h1>

    <div class="card">
        <div class="card-header">Kontak</div>
        <div class="card-body">


            {{-- {{ route('profiles.recycle') }} --}}
            <a href="{{ route('kontak.create') }}" class="btn btn-primary btn-sm mb-2">ADD</a>
            <div class="table table-responsive">
                <div class="table table-bordered text-center">
                    <table class="table table-bordered">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>No Telpon</th>
                                <th>Isi</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kontaks as $index => $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->no_telp }}</td>
                                    <td>{{ $item->isi }}</td>
                                    <td></td>

                                    {{-- {{ route('user.edit', $item->id)}} --}}

                                    <td class="justify-content-center"><a href=""
                                            class="btn btn-success btn-sm">Edit</a>
                                        <form style="display: inline;" action="{{ route('kontak.destroy', $item->id) }}"
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
