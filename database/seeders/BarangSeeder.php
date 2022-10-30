<?php

namespace Database\Seeders;

use App\Models\barang as ModelsBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       ModelsBarang::insert(
            [
                [
                    'namaBarang' => 'FOCALLURE ( Compact Powder )',
                    'fotoBarang' => 'f1.jpg',
                    'harga' => '65000',
                    'stok' => '300',
                    'ukuran' => 'Small, Medium, Large',
                    'reviewBarang' => 'Foccalure Compact Powder mengandung SPF 30 PA++ yang melindungi kulit dari sinar matahari yang membuat kulit kusam, 
                    Tekstur powder yang lembut membuat kulit semakin halus dan menyamarkan pori pori lebih efektif dan juga dapat menghambat minyak berlebih.',
                ],
                [
                    'namaBarang' => 'FOCALLURE ( Cream Concealer )',
                    'fotoBarang' => 'f2.jpg',
                    'harga' => '45000',
                    'stok' => '250',
                    'ukuran' => 'Small, Medium, Large',
                    'reviewBarang' => 'Focallure Cream Consealer Memiliki kandungan Vitamin C yang baik untuk kulit berjerawat, 
                    Memiliki pigmentasi yang cukup tinggi sehingga mampu menyamarkan noda hitam dengan sempurna.',
                ],
                [
                    'namaBarang' => 'FOCALLURE ( High Pigmented Eye Shadow',
                    'fotoBarang' => 'f7.jpg',
                    'harga' => '95000',
                    'stok' => '150',
                    'ukuran' => 'Small, Medium, Large',
                    'reviewBarang' => 'Foccalure HP Eye Shadow memiliki 18 shade warna yang berbeda dan mengandung shimer dengan kualitas 
                    pigmentasi yang tinggi, Diproduksi menggunakan teknologi canggih sehingga disetiap butirannya memiliki set powderi yang berkualitas tinggi.',
                ],
                [
                    'namaBarang' => 'FOCALLURE ( Jelly Liptint )',
                    'fotoBarang' => 'f8.jpg',
                    'harga' => '50000',
                    'stok' => '200',
                    'ukuran' => 'Small, Medium, Large',
                    'reviewBarang' => 'Focallure Jelly Liptint Diperkaya dengan antioksidan yang mengandung Vitamin C yang mampu melembabkan 
                    serta meratakan warna bibir dengan warna alami, Tekstur yang tidak lengket, Serta warna disetiap shadenya tahan lama.  ',
                ],
                [
                    'namaBarang' => 'FOCALLURE ( 2in1 Maskara & Eyeliner )',
                    'fotoBarang' => 'n1.jpg',
                    'harga' => '96000',
                    'stok' => '100',
                    'ukuran' => 'Small, Medium, Large',
                    'reviewBarang' => 'Foccalure 2in1 Mascara & Eyeliner Diformulasikan sesui kebutuhan yang simple dalam satu produk, dengan 
                    hanya menggunakan 2 produk dalam satu kemasan membuat kedua elemen ini semakin efektif digunakan, Diproduksi dengan bahan alami
                    sehingga aman digunakan pada bagian mata.',
                ],
                [
                    'namaBarang' => 'FOCALLURE ( One Set Brush )',
                    'fotoBarang' => 'n6.jpg',
                    'harga' => '15000',
                    'stok' => '50',
                    'ukuran' => 'Small, Medium, Large',
                    'reviewBarang' => 'Focallure One Set Brush Diproduksi menggunakan serat alami yang mengandung CTA sehingga 
                    memiliki tekstur yang lembut saat digunakan, Dalam satu set brush terdapat 6 jenis brush yang berbeda yang bisa digunakan sesuai kebutuhan.',
                ],
            ]
        );
    }
}
