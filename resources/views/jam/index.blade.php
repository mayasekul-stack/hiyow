@extends('layouts.app')

@section('content')

<div class="container">

    <h1 class="mb-4 text-gray-800">Jam Pelayanan</h1>

    <!-- Info -->
    <div class="alert alert-info">
        Jam pelayanan dapat berubah sesuai kebijakan.
    </div>

    <!-- CARD LIST -->
    <div class="row">

        @forelse ($jam_pelayanans as $jam)
        <div class="col-md-4 mb-4">
            <div class="card shadow h-100 border-left-primary">

                <div class="card-body">

                    <!-- Hari -->
                    <h5 class="font-weight-bold text-primary">
                        {{ $jam->hari }}
                    </h5>

                    <!-- Jam Operasional -->
                    <p class="mb-1">
                        <strong>Jam:</strong><br>
                        {{ date('H:i', strtotime($jam->jam_buka)) }} -
                        {{ date('H:i', strtotime($jam->jam_tutup)) }}
                    </p>

                    <!-- Istirahat -->
                    <p class="mb-2">
                        <strong>Istirahat:</strong><br>
                        @if($jam->jam_istirahat_mulai)
                            {{ date('H:i', strtotime($jam->jam_istirahat_mulai)) }} -
                            {{ date('H:i', strtotime($jam->jam_istirahat_selesai)) }}
                        @else
                            <span class="text-muted">Tidak ada</span>
                        @endif
                    </p>

                    <!-- Status -->
                    @if($jam->status == 'Buka')
                        <span class="badge bg-success">Buka</span>
                    @else
                        <span class="badge bg-danger">Tutup</span>
                    @endif

                </div>
            </div>
        </div>

        @empty
        <div class="col-12">
            <div class="alert alert-warning text-center">
                Tidak ada data jam pelayanan
            </div>
        </div>
        @endforelse

    </div>
</div>

@endsection