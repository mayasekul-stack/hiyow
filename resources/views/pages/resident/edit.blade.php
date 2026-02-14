@extends('layouts.app')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Ubah Tamu</h1>
    </div>

    <div class="row">
        <div class="col">
            <form action="/resident/{{ $resident->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        {{-- Nama Lengkap --}}
                            <div class="form-group mb-3">
                                <label for="name">Nama Lengkap</label>

                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    value="{{ old('name', $resident->name) }}"
                                    class="form-control @error('name') is-invalid @enderror">
                                

                                @error('name')
                                    <span class="invalid-feedback">
                                            {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            {{-- Jenis Tamu --}}
                            <div class="form-group mb-3">
                                <label>Jenis Tamu</label>
                                <select name="jenis_tamu"
                                    class="form-control @error('jenis_tamu') is-invalid @enderror">
                                    <option value="">-- Pilih --</option>
                                    <option value="warga" {{ old('jenis_tamu', $resident->jenis_tamu)=='warga'?'selected':'' }}>Warga</option>
                                    <option value="instansi" {{ old('jenis_tamu', $resident->jenis_tamu)=='instansi'?'selected':'' }}>Instansi</option>
                                    <option value="lainnya" {{ old('jenis_tamu', $resident->jenis_tamu)=='lainnya'?'selected':'' }}>Lainnya</option>
                                </select>

                                @error('jenis_tamu')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- Asal Desa --}}
                            <div class="form-group mb-3">
                                    <label>Asal Desa / Kelurahan</label>
                                    <input type="text" name="asal_desa" value="{{ old('asal_desa', $resident->asal_desa) }}" class="form-control @error('asal_desa') is-invalid @enderror">
                                    
                                    @error('asal_desa')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                            </div>
                                {{-- Asal Instansi --}}
                            <div class="form-group mb-3">
                                    <label>Asal Instansi</label>
                                    <input type="text" name="asal_instansi" value="{{ old('asal_instansi', $resident->asal_instansi) }}"class="form-control @error('asal_instansi') is-invalid @enderror">
                                    
                                    @error('asal_instansi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                            </div>
                            {{-- Alamat --}}
                            <div class="form-group mb-3">
                                <label for="address">Alamat</label>
                                <textarea name="address" id="address" cols="30"
                                rows="10" class="form-control @error('address') is-invalid @enderror">{{ old('address', $resident->address) }}</textarea>
                            

                            @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            </div>
                                {{-- Keperluan --}}
                            <div class="form-group mb-3">
                                <label>Keperluan</label>
                                <input type="text" name="keperluan" value="{{ old('keperluan', $resident->keperluan) }}"
                                class="form-control @error('keperluan') is-invalid @enderror">

                                @error('keperluan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                                {{-- No HP --}}
                            <div class="form-group mb-3">
                                <label for="no_hp">Telephone</label>
                                <input type="text" name="no_hp" id="no_hp" value="{{ old('no_hp', $resident->no_hp) }}" 
                                class="form-control @error('no_hp') is-invalid @enderror">

                                @error('no_hp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            {{-- Tanggal Kunjungan --}}
                            <div class="form-group mb-3">
                                <label>Tanggal Kunjungan</label>
                                <input type="date" name="tgl_kjgn" value="{{ old('tgl_kjgn', $resident->tgl_kjgn) }}"
                                class="form-control @error('tgl_kjgn') is-invalid @enderror">

                                @error('tgl_kjgn')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                                {{-- Jam Kunjungan --}}
                            <div class="form-group mb-3">
                                <label>Jam Kunjungan</label>
                                <input type="time" name="jam_kjgn" value="{{ old('jam_kjgn', $resident->jam_kjgn) }}"
                                class="form-control @error('jam_kjgn') is-invalid @enderror">

                                @error('jam_kjgn')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            {{-- Petugas --}}
                            <div class="form-group mb-3">
                                <label>Petugas</label>
                                <input type="text" name="petugas" value="{{ old('petugas', $resident->petugas) }}"
                                class="form-control @error('petugas') is-invalid @enderror">

                                @error('petugas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            {{-- Status --}}
                            <div class="form-group mb-3">
                                <label>Status</label>
                                <select
                                    name="status"
                                    class="form-control @error('status') is-invalid @enderror"
                                >
                                    <option value="">-- Pilih Status --</option>
                                    <option value="belum_diproses" {{ old('status', $resident->status) == 'belum_diproses' ? 'selected' : '' }}>
                                        Belum di Proses
                                    </option>
                                    <option value="diproses" {{ old('status', $resident->status) == 'diproses' ? 'selected' : '' }}>
                                        Diproses
                                    </option>
                                    <option value="selesai" {{ old('status', $resident->status) == 'selesai' ? 'selected' : '' }}>
                                        Selesai
                                    </option>
                                </select>

                                @error('status')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Catatan --}}
                            <div class="form-group mb-3">
                                <label>Catatan</label>
                                <textarea name="catatan" rows="3" class="form-control @error('catatan') is-invalid @enderror">
                                {{ old('catatan', $resident->catatan) }}</textarea>
                                

                                @error('catatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                                <div class="card-footer">
                            <div class="d-flex justify-content-end" style="gap: 10px">
                            <a href="/resident" class="btn btn-outline-secondary">
                                Kembali
                            </a>
                            <button type="submit" class="btn btn-warning">
                                Simpan perubahan
                            </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection