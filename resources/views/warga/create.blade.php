@extends('layouts.master')

@section('content')



<div class="container">
    <h1 class="text-center">Create Warga</h1>
    <form action="/warga/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control">
        </div>
        <div class="mb-3">
            <label for="floatingTextarea2">Alamat</label>
            <textarea class="form-control" placeholder="Leave a comment here" name="alamat" rows="10"></textarea>
        </div>
        <select class="form-select" name="jenis_kelamin">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="P">Perempuan</option>
            <option value="L">Laki-Laki</option>
        </select> <br>
        <input  class="btn btn-success" type="submit" name="submit" value="Save">
    
    </form>
</div>


@endsection