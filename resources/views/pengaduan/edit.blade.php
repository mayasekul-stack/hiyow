@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Pengaduan</h3>

    <form action="{{ route('pengaduan.update', $pengaduan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control"
                value="{{ $pengaduan->nama }}">
        </div>

        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control"
                value="{{ $pengaduan->tanggal }}">
        </div>

        <div class="mb-3">
            <label>Lokasi</label>
            <input type="text" name="lokasi" class="form-control"
                value="{{ $pengaduan->lokasi }}">
        </div>

        <div class="mb-3">
            <label>Isi Laporan</label>
            <textarea name="isi_laporan" class="form-control">{{ $pengaduan->isi_laporan }}</textarea>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('pengaduan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection