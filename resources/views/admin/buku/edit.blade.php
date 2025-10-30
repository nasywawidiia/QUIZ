@extends('admin.layouts.main')

@section('content')
<h2>Edit Buku</h2>
<form action="{{ route('buku.update', $buku->id) }}" method="POST">
    @csrf @method('PUT')
    @include('admin.nabuku.form')
    <button type="submit" class="btn btn-success mt-3">Perbarui</button>
    <a href="{{ route('buku.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</form>
@endsection
