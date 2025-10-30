@extends('admin.layouts.main')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Daftar Buku</h2>
    <a href="{{ route('buku.create') }}" class="btn btn-primary">+ Tambah Buku</a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bukus as $buku)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->penulis }}</td>
            <td>{{ $buku->penerbit }}</td>
            <td>{{ $buku->tahun_terbit }}</td>
            <td>{{ $buku->jumlah }}</td>
            <td>
                <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus buku ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
