@extends('layouts.app')

@section('content')


<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Jam Pelayanan</h1>
                        <a href="/jam/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
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
                                                        <th>Hari</th>
                                                        <th>Jam Buka</th>
                                                        <th>Jam Tutup</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        @if (count($jam_pelayanans) < 1 ) 
                                            <tbody>
                                                <tr>
                                                    <td colspan="12"> 
                                                        <p class="pt-3 text-center">Tidak Ada Data</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @else
                                        <tbody>
                                            @foreach ($jam_pelayanans as $key => $jam_pelayanan)
                                                        <tr>
                                                            <td>{{ $key + 1 }}</td>
                                                            <td>{{ $jam_pelayanan->hari }}</td>
                                                            <td>{{ $jam_pelayanan->jam_buka }}</td>
                                                            <td>{{ $jam_pelayanan->jam_tutup }}</td>
                                                            <td>{{ $jam_pelayanan->status }}</td>
                                                            <td>
                                                                <form action="/jam/{{ $jam_pelayanan->id }}" method="POST">
                                                                    @csrf
                                                                    @method('PUT')

                                                                    <select name="status" class="form-control" onchange="this.form.submit()">
                                                                        <option value="Menunggu" {{ $jam_pelayanan->status == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                                                                        <option value="Diproses" {{ $jam_pelayanan->status == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                                                                        <option value="Selesai" {{ $jam_pelayanan->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                                                    </select>
                                                                </form>
                                                            </td>

                                                            <td>
                                                                <div class="d-flex">
                                                                    <a href="/jam/{{ $jam_pelayanan->id }}/edit"class="d-inline-block mr-2 btn btn-sm btn-warning">
                                                                        <i class="fas fa-pen"></i>
                                                                    </a>

                                                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#confirmationDelete-{{ $jam_pelayanan->id }}">
                                                                        <i class="fas fa-eraser"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @include('jam.confirmation-delete')
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection