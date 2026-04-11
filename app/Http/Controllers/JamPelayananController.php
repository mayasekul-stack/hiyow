<?php

namespace App\Http\Controllers;

use App\Models\JamPelayanan;
use Illuminate\Http\Request;

class JamPelayananController extends Controller
{
    public function index()
    {
        $jam_pelayanans = JamPelayanan::all();
        return view('jam.index', compact('jam_pelayanans'));
    }

}