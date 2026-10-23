
<?php

class Peralatan
{
    private string $nama;
    private string $kategori;
    private int $stok;

    public function __construct(
        string $nama,
        string $kategori,
        int $stok
    ) {
        $this->nama = $nama;
        $this->kategori = $kategori;
        $this->stok = $stok;
    }

    public function ringkasan(): string
    {
        return "Nama: " . $this->nama
            . " | Kategori: " . $this->kategori
            . " | Stok: " . $this->stok;
    }
}

class PeralatanKomputer extends Peralatan
{
    public function ringkasan(): string
    {
        return "[Komputer] " . parent::ringkasan();
    }
}

// Membuat object peralatan biasa
$alat1 = new Peralatan(
    "Mikroskop",
    "Laboratorium",
    5
);

// Membuat object peralatan komputer
$alat2 = new PeralatanKomputer(
    "Laptop",
    "Elektronik",
    10
);

// Menampilkan hasil
echo $alat1->ringkasan() . PHP_EOL;
echo $alat2->ringkasan() . PHP_EOL;

?>
