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
                    'namaBarang' => 'SCARLETT ( Serum Niacinamide )',
                    'fotoBarang' => 'f1.jpg',
                    'harga' => '67000',
                    'stok' => '350',
                    'ukuran' => '15mL',
                    'reviewBarang' => 'Scarlett Serum Niacinamide mengandung Beta Glucan untuk merawat skin barrier dan Creatine untuk mebantu menyejukkan dan melembabkan kulit, 
                    Tekstur dari serum ini cair dan sangat mudah diratakan pada kulit wajah selain untuk melembabkan kandungan Niacinamide pada serum ini juga dapat memcerahkan warna kulit.',
                ],
                [
                    'namaBarang' => 'SCARLETT ( Whitening Facial Wash )',
                    'fotoBarang' => 'f2.jpg',
                    'harga' => '68500',
                    'stok' => '400',
                    'ukuran' => '100mL',
                    'reviewBarang' => 'Scarlett Whitening Facial Wash mengandung Gluthatione untuk membantu mencerahkan kulit dan Aloevera untuk merawat kekekncangan kulit, 
                    Tekstur dari Facial Wash ini cair dan tidak mengandung banyak busa serta tidak ada bau jadi sangat aman dan tidak mengandung parfume.',
                ],
                [
                    'namaBarang' => 'SCARLETT ( Mugwort Mask )',
                    'fotoBarang' => 'f7.jpg',
                    'harga' => '69000',
                    'stok' => '250',
                    'ukuran' => '100gr',
                    'reviewBarang' => 'Scarlett Whitening Mugwort Mask ini mengandung Bamboo Charcol untuk mengangkat minyak berlebih serta mengangkat sel kulit mati , 
                    Kandungan Charcoal pada masker ini akan membuat sensasi dingin diwajah dan masker ini sangat cocok digunakan untuk wajah bruntusan.',
                ],
                [
                    'namaBarang' => 'SCARLETT ( Body Lotion Charming )',
                    'fotoBarang' => 'f8.jpg',
                    'harga' => '6900',
                    'stok' => '320',
                    'ukuran' => '300ml',
                    'reviewBarang' => 'Scarlett Body Lotion Charming ini mengandung Vitamin E yang sangat bagus pada kulit dan bisa menjaga kelembapan kulit, 
                    Tekstur dari Body Lotion ini sangat mudah diratakan pada kulit dan bisa menjaga kulit dari paparan sinar UV.',
                ],
                [
                    'namaBarang' => 'SCARLETT ( Essence Toner )',
                    'fotoBarang' => 'n1.jpg',
                    'harga' => '78000',
                    'stok' => '225',
                    'ukuran' => '100ml',
                    'reviewBarang' => 'Scarlett Essence Toner  ini mengandung Jeju Propolis Extract yang dapat membantu merawat keremajaan kulit sehingga kulit tetap halus, 
                    Essence Toner ini mudah menyerap di kulit ketika sudah diapliksikan selain itu essence ini juga dapat mencerahkan kulit dan tidak membuat kulit menjadi kering.',
                ],
                [
                    'namaBarang' => 'SCARLETT ( Body Scrub Coffe )',
                    'fotoBarang' => 'f1.jpg',
                    'harga' => '69000',
                    'stok' => '300',
                    'ukuran' => '250ml',
                    'reviewBarang' => 'Scarlett Body Scrub Coffe mengandung Gluthatione yang dapat mencerahkan serta meratakan warna kulit yang tidak merata, 
                    Butiran halus yang ada pada scrub ini tidak membuat sakit ketika diusapkan ke kulit dan tidak membutuhkan tenaga ekstra untuk membilasnya.',
                ],
            ]
        );
    }
}
