@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Pengaduan Masyarakat</h1>
                        <a href="/pengaduan/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Tambah</a> 
                    </div>

                    <!-- Table -->
                    <div class="row">
                        <div class="col">
                            <div class="card shadow">
                                <div class="card-body">
                                    <table class="table table-bordered table-hovered">
                                        <thead class="table-light">
                                            <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Tanggal</th>
                                                        <th>Lokasi</th>
                                                        <th>Isi Laporan</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        @if (count($pengaduans) < 1 ) 
                                            <tbody>
                                                <tr>
                                                    <td colspan="12"> 
                                                        <p class="pt-3 text-center">Tidak Ada Data</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @else
                                        <tbody>
                                            @foreach ($pengaduans as $key => $pengaduan)
                                                        <tr>
                                                            <td>{{ $key + 1 }}</td>
                                                            <td>{{ $pengaduan->nama }}</td>
                                                            <td>{{ $pengaduan->tanggal }}</td>
                                                            <td>{{ $pengaduan->lokasi }}</td>
                                                            <td>{{ $pengaduan->isi_laporan }}</td>
                                                            <td>
                                                                <form action="/pengaduan/{{ $pengaduan->id }}" method="POST">
                                                                    @csrf
                                                                    @method('PUT')

                                                                    <select name="status" class="form-control" onchange="this.form.submit()">
                                                                        <option value="Menunggu" {{ $pengaduan->status == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                                                                        <option value="Diproses" {{ $pengaduan->status == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                                                                        <option value="Selesai" {{ $pengaduan->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                                                    </select>
                                                                </form>
                                                            </td>

                                                            <td>
                                                                <div class="d-flex">
                                                                    <a href="/pengaduan/{{ $pengaduan->id }}/edit"class="d-inline-block mr-2 btn btn-sm btn-warning">
                                                                        <i class="fas fa-pen"></i>
                                                                    </a>

                                                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#confirmationDelete-{{ $pengaduan->id }}">
                                                                        <i class="fas fa-eraser"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @include('pengaduan.confirmation-delete')
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection