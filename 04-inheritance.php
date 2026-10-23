<?php
class Produk
{
    public function __construct(protected string $nama) {}

    public function label(): string
    {
        return 'Produk: ' . $this->nama;
    }
}

class ProdukDigital extends Produk
{
    public function label(): string
    {
        return 'Produk digital: ' . $this->nama;
    }
}
class ProdukFisik extends Produk
{
    public function label(): string
    {
        return 'Produk fisik: ' . $this->nama;
    }
}

$barang = new Produk('Buku Cetak');
$digital = new ProdukDigital('E-Book OOP');
$fisik = new ProdukFisik('Meja Belajar');
echo $barang->label() . PHP_EOL;
echo $digital->label() . PHP_EOL;
echo $fisik->label() . PHP_EOL;
