@extends('admin.layouts.main')

@section('content')
<h2>Tambah Buku</h2>
<form action="{{ route('buku.store') }}" method="POST">
    @csrf
    @include('admin.buku.form')
    <button type="submit" class="btn btn-success mt-3">Simpan</button>
    <a href="{{ route('buku.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</form>
@endsection
