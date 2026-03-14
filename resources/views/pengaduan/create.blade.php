@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Form Pengaduan Masyarakat</h3>

    <form action="/pengaduan/store" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label>Nama Pelapor</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Lokasi Kejadian</label>
            <input type="text" name="lokasi" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Isi Laporan</label>
            <textarea name="isi_laporan" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>
        <a href="/pengaduan" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection