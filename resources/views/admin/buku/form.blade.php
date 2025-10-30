<div class="mb-3">
    <label>Judul Buku</label>
    <input type="text" name="judul" class="form-control" value="{{ old('judul', $buku->judul ?? '') }}">
</div>

<div class="mb-3">
    <label>Penulis</label>
    <input type="text" name="penulis" class="form-control" value="{{ old('penulis', $buku->penulis ?? '') }}">
</div>

<div class="mb-3">
    <label>Penerbit</label>
    <input type="text" name="penerbit" class="form-control" value="{{ old('penerbit', $buku->penerbit ?? '') }}">
</div>

<div class="mb-3">
    <label>Tahun Terbit</label>
    <input type="number" name="tahun_terbit" class="form-control" value="{{ old('tahun_terbit', $buku->tahun_terbit ?? '') }}">
</div>

<div class="mb-3">
    <label>Jumlah Eksemplar</label>
    <input type="number" name="jumlah" class="form-control" value="{{ old('jumlah', $buku->jumlah ?? '') }}">
</div>
