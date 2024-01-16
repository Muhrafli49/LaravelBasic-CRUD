@extends('layouts.master')


@section('content')

<div class="container">
    <h1 class="text-center">Edit Data Warga</h1>
    <form action="/warga/store" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="nik" class="form-control" value="{{ $warga->nama }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control" value="{{ $warga->nik }}">
        </div>
        <div class="mb-3">
            <label for="floatingTextarea2">Alamat</label>
            <textarea class="form-control" placeholder="Leave a comment here" name="alamat" rows="10"> {{ $warga->alamat }}</textarea>
        </div>
        <select class="form-select" name="jenis_kelamin">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="P" @if ($warga->jenis_kelamin == "P") selected @endif>Perempuan</option>
            <option value="L"@if ($warga->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
        </select> <br>
        <input  class="btn btn-success" type="submit" name="submit" value="Update">
    
    </form>
</div>


@endsection