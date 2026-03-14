@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">

        <!-- HERO -->
        <div style="position: relative; height: 70vh; overflow: hidden;">

        <!-- FOTO -->
        <img 
                src="{{ asset('template/img/kecamatan.jfif') }}"
                style="width:100%; height:100%; object-fit:cover;"
                alt="Kantor Kecamatan"
        >

        <!-- OVERLAY -->
        <div style="
                position:absolute;
                top:0; left:0;
                width:100%; height:100%;
                background: rgba(0,0,0,0.45);
        "></div>

        <!-- TEKS -->
        <div style="
                position:absolute;
                top:50%; left:50%;
                transform: translate(-50%, -50%);
                text-align:center;
                color:white;
                max-width:600px;
        ">
                <h1 style="font-weight:700;">Selamat Datang</h1>
                <h4>Website Pelayanan Kecamatan Cikole</h4>
                <p class="mt-2">
                Melayani masyarakat dengan cepat, transparan, dan terpercaya
                </p>
        </div>

        </div>

</div>
@endsection