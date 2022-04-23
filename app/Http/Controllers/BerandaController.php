<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $var_name = "Sekar Arum";
        return view('HalamanDepan.beranda', compact('var_name'));
    }

    public function halamansatu()
    {
        return view('Halaman.Halaman-satu');
    }
    public function halamandua()
    {
        return view('Halaman.Halaman-dua');
    }
}
