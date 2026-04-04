@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Jam Pelayanan</h3>

    <form action="{{ route('jam.update', $jam_pelayanan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Hari</label>
            <input type="text" name="hari" class="form-control"
                value="{{ $jam_pelayanan->hari }}">
        </div>

        <div class="mb-3">
            <label>Jam Buka</label>
            <input type="time" name="jam_buka" class="form-control"
                value="{{ $jam_pelayanan->jam_buka }}">
        </div>

        <div class="mb-3">
            <label>Jam Tutup</label>
            <input type="time" name="jam_tutup" class="form-control"
                value="{{ $jam_pelayanan->jam_tutup }}">
        </div>

        <div class="mb-3">
            <label>Isi Laporan</label>
            <textarea name="isi_laporan" class="form-control">{{ $jam_pelayanan->isi_laporan }}</textarea>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('jam.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection