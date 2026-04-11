@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Daftar Tamu</h1>
                        <a href="/resident/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Tambah</a> 
                    </div>

                    <!-- Table -->
                    <div class="row">
                        <div class="col">
                            <div class="card shadow">
                                <div class="card-body">
                                    <table class="table table-responsive table-bordered table-hovered">
                                        <thead>
                                            <tr>
                                                        <th>Nama</th>
                                                        <th>Jenis Tamu</th>
                                                        <th>Asal Desa</th>
                                                        <th>Asal Instansi</th>
                                                        <th>Alamat</th>
                                                        <th>Keperluan</th>
                                                        <th>Telephone</th>
                                                        <th>Tanggal Kunjungan</th>
                                                        <th>Jam Kunjungan</th>
                                                        <th>Petugas</th>
                                                        <th>Status</th>
                                                        <th>Catatan</th>
                                                        <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        @if (count($residents) < 1 ) 
                                            <tbody>
                                                <tr>
                                                    <td colspan="13"> 
                                                        <p class="pt-3 text-center">Tidak Ada Data</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @else
                                        <tbody>
                                            @foreach ($residents as $item)
                                                        <tr>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->jenis_tamu }}</td>
                                                            <td>{{ $item->asal_desa }}</td>
                                                            <td>{{ $item->asal_instansi }}</td>
                                                            <td>{{ $item->address }}</td>
                                                            <td>{{ $item->keperluan }}</td>
                                                            <td>{{ $item->no_hp }}</td>
                                                            <td>{{ $item->tgl_kjgn }}</td>
                                                            <td>{{ $item->jam_kjgn }}</td>
                                                            <td>{{ $item->petugas }}</td>
                                                            <td>{{ $item->status }}</td>
                                                            <td>{{ $item->catatan }}</td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <a href="/resident/{{ $item->id }}/edit"class="d-inline-block mr-2 btn btn-sm btn-warning">
                                                                        <i class="fas fa-pen"></i>
                                                                    </a>

                                                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#confirmationDelete-{{ $item->id }}">
                                                                        <i class="fas fa-eraser"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @include('pages.resident.confirmation-delete')
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection