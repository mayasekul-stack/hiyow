@extends('layouts.app')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Tamu</h1>
    </div>

    <div class="row">
        <div class="col">
            <form action="" class="">
                <div class="card">
                   <div class="card-body">
                       {{-- Nama Lengkap --}}
                            <div class="form-group mc-3">
                              <label for="name">Nama Lengkap</label>
                               <input type="name" name="name" id="name"
                                class="form-control">
                            </div>
                            {{-- Jenis Tamu --}}
                            <div class="form-group mb-3">
                                <label>Jenis Tamu</label>
                                <select name="jenis_tamu" class="form-control" required>
                                      <option value="">-- Pilih --</option>
                                      <option value="warga">Warga</option>
                                      <option value="instansi">Instansi</option>
                                      <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                            {{-- Asal Desa --}}
                            <div class="form-group mb-3">
                                 <label>Asal Desa / Kelurahan</label>
                                 <input type="text" name="asal_desa" class="form-control">
                            </div>
                             {{-- Asal Instansi --}}
                            <div class="form-group mb-3">
                                 <label>Asal Instansi</label>
                                 <input type="text" name="asal_instansi" class="form-control">
                            </div>
                            {{-- Alamat --}}
                            <div class="form-group mc-3">
                              <label for="address">Alamat</label>
                               <textarea type="address" id="address" cols="30"
                                 rows="10" class="form-control"></textarea>
                            </div>
                             {{-- Keperluan --}}
                            <div class="form-group mb-3">
                                <label>Keperluan</label>
                                <input type="text" name="keperluan" class="form-control" required>
                            </div>
                             {{-- No HP --}}
                            <div class="form-group mc-3">
                              <label for="no_hp">Telephone</label>
                               <input type="text" name="no_hp" id="no_hp" 
                                class="form-control">
                            </div>
                            {{-- Tanggal Kunjungan --}}
                            <div class="form-group mb-3">
                                <label>Tanggal Kunjungan</label>
                                <input type="date" name="tanggal_kunjungan" class="form-control" required>
                            </div>
                             {{-- Jam Kunjungan --}}
                            <div class="form-group mb-3">
                                <label>Jam Kunjungan</label>
                                <input type="time" name="jam_kunjungan" class="form-control">
                            </div>
                            {{-- Petugas --}}
                            <div class="form-group mb-3">
                                <label>Petugas</label>
                                <input type="text" name="petugas" class="form-control">
                            </div>
                             {{-- Catatan --}}
                            <div class="form-group mb-3">
                                <label>Catatan</label>
                                <textarea name="catatan" class="form-control" rows="3"></textarea>
                            </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection