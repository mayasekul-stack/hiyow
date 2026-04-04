@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Form Jam Pelayanan</h3>

    <form action="/jam/store" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label>Hari</label>
            <input type="text" name="hari" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Jam Buka</label>
            <input type="time" name="jam_buka" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Jam Tutup</label>
            <input type="time" name="jam_tutup" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Isi Laporan</label>
            <textarea name="isi_laporan" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>
        <a href="/jam" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection