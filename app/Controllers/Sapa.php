<?php

namespace App\Controllers;

class Sapa extends BaseController
{
    // Tahap 2: Halaman sapaan biasa
    public function index()
    {
        return view('sapa', [
            'judul' => 'Halo, CodeIgniter 4!',
            'pesan' => 'Saya belajar MVC pada minggu ketiga.'
        ]);
    }

    // Tahap 3: Halaman sapaan dengan nama dari URL
    public function nama(string $nama)
    {
        return view('sapa', [
            'judul' => 'Salam, ' . $nama,
            'pesan' => 'Parameter nama dikirim melalui URL.'
        ]);
    }
}
