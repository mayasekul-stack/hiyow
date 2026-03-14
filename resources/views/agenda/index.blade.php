@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Agenda Kegiatan</h1>
                        <a href="/agenda/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Tambah</a> 
                    </div>

                    <!-- Table -->
                    <div class="row">
                        <div class="col">
                            <div class="card shadow">
                                <div class="card-body">
                                    <table class="table table-responsive table-bordered table-hovered">
                                        <thead class="table-light">
                                            <tr>
                                                        <th>No</th>
                                                        <th>Kegiatan</th>
                                                        <th>Tanggal</th>
                                                        <th>Tempat</th>
                                                        <th>Penanggung Jawab</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        @if (count($agendas) < 1 ) 
                                            <tbody>
                                                <tr>
                                                    <td colspan="12"> 
                                                        <p class="pt-3 text-center">Tidak Ada Data</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @else
                                        <tbody>
                                            @foreach ($agendas as $key => $agenda)
                                                        <tr>
                                                            <td>{{ $key + 1 }}</td>
                                                            <td>{{ $agenda->judul }}</td>
                                                            <td>{{ $agenda->tanggal }}</td>
                                                            <td>{{ $agenda->lokasi }}</td>
                                                            <td>{{ $agenda->penanggung_jawab }}</td>
                                                            <td>{{ $agenda->status }}</td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <a href="/agenda/{{ $agenda->id }}/edit"class="d-inline-block mr-2 btn btn-sm btn-warning">
                                                                        <i class="fas fa-pen"></i>
                                                                    </a>

                                                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#confirmationDelete-{{ $agenda->id }}">
                                                                        <i class="fas fa-eraser"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @include('agenda.confirmation-delete')
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection