@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Warga') }}</div>

                <div class="card-body">
                    <a class="btn btn-primary" href="/warga/create">Add Warga</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($warga as $w)
                    <tr>
                        <td>{{ $w->id }}</td>
                        <td>{{ $w->nama }}</td>
                        <td>{{ $w->alamat }}</td>
                        <td>{{ $w->jenis_kelamin }}</td>

                        <td>
                            <div class="btn-group" role="group">
                                <a class="btn btn-warning" href="/warga/{{ $w->id }}/edit">Edit</a>
                                <form action="/warga/{{ $w->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Yakin ingin menghapus data ini?');">
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
