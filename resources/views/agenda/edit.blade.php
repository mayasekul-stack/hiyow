@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        {{ $errors->first() }}
    </div>
@endif
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Ubah Agenda</h1>
    </div>

    <div class="row">
        <div class="col">
            <form action="/agenda/{{ $agenda->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        {{-- Nama Kegiatan --}}
                            <div class="form-group mb-3">
                                <label for="judul">Nama Kegiatan</label>

                                <input
                                    type="text"
                                    name="judul"
                                    id="judul"
                                    value="{{ old('judul', $agenda->judul) }}"
                                    class="form-control {{ $errors->has('judul') ? 'is-invalid' : '' }}"
                                >

                                @if ($errors->has('judul'))
                                    <div class="invalid-feedback">
                                            {{ $errors->first('judul') }}
                                    </div>
                                @endif
                            </div>

                            {{-- Tanggal --}}
                            <div class="form-group mb-3">
                                <label>Tanggal</label>
                                <input type="date" name="tanggal" value="{{ old('tanggal', $agenda->tanggal) }}"
                                class="form-control @error('tanggal') is-invalid @enderror">

                                @error('tanggal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            {{-- waktu --}}
                            <div class="form-group mb-3">
                                <label for="waktu">Waktu</label>
                                <input
                                    type="time"
                                    name="waktu"
                                    id="waktu"
                                    value="{{ old('waktu', $agenda->waktu) }}"
                                    class="form-control {{ $errors->has('waktu') ? 'is-invalid' : '' }}"
                                >

                                @if ($errors->has('waktu'))
                                    <div class="invalid-feedback">
                                            {{ $message }}
                                    </div>
                                @endif
                            </div>

                            {{-- Tempat --}}
                            <div class="form-group mb-3">
                                <label for="lokasi">Tempat</label>
                                <textarea name="lokasi" id="lokasi" cols="30"
                                rows="10" class="form-control @error('lokasi') is-invalid @enderror">{{ old('lokasi', $agenda->lokasi) }}</textarea>
                            

                            @error('lokasi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            </div>

                            {{-- Penanggung jawab --}}
                            <div class="form-group mb-3">
                                <label>Penanggung Jawab</label>
                                <input type="text" name="penanggung_jawab" value="{{ old('penanggung_jawab', $agenda->penanggung_jawab) }}"
                                class="form-control @error('penanggung_jawab') is-invalid @enderror">

                                @error('penanggung_jawab')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            {{-- keterangan --}}
                            <div class="form-group mb-3">
                                <label for="keterangan">Keterangan</label>

                                <input
                                    type="text"
                                    name="keterangan"
                                    id="keterangan"
                                    value="{{ old('keterangan', $agenda->keterangan) }}"
                                    class="form-control {{ $errors->has('keterangan') ? 'is-invalid' : '' }}"
                                >

                                @if ($errors->has('keterangan'))
                                    <div class="invalid-feedback">
                                            {{ $message }}
                                    </div>
                                @endif
                            </div>

                            {{-- Status --}}
                            <div class="form-group mb-3">
                                <label>Status</label>
                                <select
                                    name="status"
                                    class="form-control @error('status') is-invalid @enderror"
                                >
                                    <option value="">-- Pilih Status --</option>
                                    <option value="akan_berlangsung" {{ old('status', $agenda->status) == 'akan_berlangsung' ? 'selected' : '' }}>
                                        Akan Berlangsung
                                    </option>
                                    <option value="selesai" {{ old('status', $agenda->status) == 'selesai' ? 'selected' : '' }}>
                                        Selesai
                                    </option>
                                </select>

                                @error('status')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="card-footer">
                            <div class="d-flex justify-content-end" style="gap: 10px">
                            <a href="/agenda" class="btn btn-outline-secondary">
                            Kembali
                            </a>
                            <button type="submit" class="btn btn-primary">
                            Simpan Perubahan
                            </div>
                        </div>
                    </div> 
                </div> 
            </form>
        </div> 
    </div>  
@endsection