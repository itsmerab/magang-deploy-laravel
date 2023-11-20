<?php

namespace Database\Seeders;

use App\Models\KategoriBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KategoriBarang::insert([
            'nama' => 'Sembako',        
            'keterangan' =>'Berbagi Sembako',        
        ]);
        KategoriBarang::insert([
            'nama' => 'Minuman Dingin',        
            'keterangan' =>'kumpulan minuman dingin',        
        ]);
        KategoriBarang::insert([
            'nama' => 'Alat tulis',        
            'keterangan' =>'untuk keperluan sekolah',        
        ]);
        KategoriBarang::insert([
            'nama' => 'sewa rumah',        
            'keterangan' =>'mau dibayar kapan',        
        ]);
        KategoriBarang::insert([
            'nama' => 'kain baju',        
            'keterangan' =>'untuk membuat baju',        
        ]);
    }
}
