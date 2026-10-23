<?php

namespace App\Models;

class KegiatanModel
{
    public function semua(): array
    {
        return [
            [
                'id' => 1,
                'judul' => 'Workshop Web',
                'kategori' => 'Teknologi',
                'kuota' => 30,
                'lokasi' => 'Laboratorium Komputer'
            ],
            [
                'id' => 2,
                'judul' => 'Pelatihan Desain',
                'kategori' => 'Kreatif',
                'kuota' => 25,
                'lokasi' => 'Ruang Multimedia'
            ],
            [
                'id' => 3,
                'judul' => 'Kelas Presentasi',
                'kategori' => 'Komunikasi',
                'kuota' => 20,
                'lokasi' => 'Aula Kampus'
            ],
            [
                'id' => 4,
                'judul' => 'Seminar Teknologi',
                'kategori' => 'Teknologi',
                'kuota' => 40,
                'lokasi' => 'Auditorium Kampus'
            ],
            [
                'id' => 5,
                'judul' => 'Pelatihan Kewirausahaan',
                'kategori' => 'Bisnis',
                'kuota' => 35,
                'lokasi' => 'Ruang Seminar'
            ]
        ];
    }

    public function cari(int $id): ?array
    {
        foreach ($this->semua() as $item) {
            if ($item['id'] === $id) {
                return $item;
            }
        }

        return null;
    }
}
