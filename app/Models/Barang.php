<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    // mengganti nama table
    protected $table = 'barang';

    // menentukan column yang tidak boleh diisi secara langsung
    protected $guarded = [];

    public function kategori()
    {
        return $this->belongsTo(KategoriBarang::class, 'kategori_id', 'id');
    }

    protected function gambarUrl(): Attribute
    {
        return Attribute::make(
            get: function () {
                // jika data gambar kosong
                if (!$this->gambar) {
                    // set data gambar ke defauit.jpg
                    $this->gambar = 'picture.png';
                }

                return url('uploads/barang/' . $this->gambar);
            },
        );
    }
}