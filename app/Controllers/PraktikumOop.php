<?php
namespace App\Controllers;

use App\Libraries\Produk;

class PraktikumOop extends BaseController
{
    public function index(): string
    {
        $produk = new Produk('Flashdisk 32GB', 85000);
        $produk2 = new Produk('Laptop', 7500000);

        return view('praktikum_oop', [
            'judul' => 'Demo OOP CodeIgniter 4',
            'infoProduk' => $produk->getInfo(),
            'infoProduk2' => $produk2->getInfo(),
        ]);
    }
}
