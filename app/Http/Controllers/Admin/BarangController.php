<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\KategoriBarang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function create(Request $request)
    {
        $listkategori = KategoriBarang::get();

        return view('admin.barang.create',[
            'listkategori' => $listkategori,
        ]);
    }
    public function index(Request $request)
    {
        $listBarang = Barang::with('kategori')->get();

        return view('admin.barang.index', [
            'listBarang' => $listBarang,
        ]);
    } 
    public function store(Request $request)
    {
        // validasi
        $input = $request->validate([
            'kategori'      => 'required|integer',
            'nama'          => 'required',
            'harga'         => 'required|numeric',
            'stok'          => 'required|numeric',
            'keterangan'    => 'nullable',
            'gambar'        => 'nullable|file|image',
        ]);

        // membuat data barang
        $barang = new Barang();
        $barang->kategori_id = $request->kategori;
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->keterangan = $request->keterangan;

        //cek apakah ada file gambar
        if ($request->file('gambar')) {
            // simpan ke variabel agar mudah diakses
            $gambar = $request->file('gambar');

            // generate nama acak
            $namaGambar = string::slug($barang->nama . " " . string::random(4));

            // tambahkan extensi file pada nama
            $namaGambar .= "." . $gambar->getClientOriginalExtension();
            
            // pindah ke folder uploads/barang
            $gambar->move('uploads/barang', $namaGambar);

            // simpan nama gambar ke column gambar
            $barang->gambar = $namaGambar;
        }

        // cara apakah gagal menyimpan
        if (! $barang->save()) {
            return redirect()
                ->back()
                ->with('error','Gagal menyimpan data barang');
        }

        // berhasil
        return redirect()
            ->route('admin.barang.index')
            ->with('success','Berhasil menyimpan data barang');
    }
    public function edit(Request $request, $id)
    {
        // Ambil data barang
        $listkategori = KategoriBarang::get();
        $barang = Barang::findOrFail($id);

        return view('admin.barang.edit' , [
            'barang' => $barang,    
            'listkategori' => $listkategori,    
        ]);
    }
    public function update(Request $request, $id)
    {
        // validasi
        $input = $request->validate([
            'kategori'      => 'required|integer',
            'nama'          => 'required',
            'harga'         => 'required|numeric',
            'stok'          => 'required|numeric',
            'keterangan'    => 'nullable',
        ]);

        // cari barang
        $barang = Barang::find($id);
        if (! $barang) {
            return redirect('admin/barang')
                ->with('error' , 'Data barang tidak ditemukan');
        }

        // ubah data barang
        $barang->kategori_id = $request->kategori;
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->keterangan = $request->keterangan;

        // cek apakah gagal menyimpan
        if (! $barang->save()){
            return redirect()
                ->back()
                ->with('error', 'Gagal Menyimpan data barang');
        }

        // Berhasil
        return redirect('admin/barang')
            ->with('success', 'Berhasil menyimpan data barang');
    }
    public function destroy(Request $request, $id)
    {
        // cari
        $barang = Barang::find($id);
        if (! $barang) {
            return redirect('admin/barang')
                ->with('error', 'Data barang tidak ditemukan');
        }

        // cek apakah berhasil dihapus
        if (! $barang->delete()) {
            return redirect('admin/barang')
                ->with('error', 'Gagal Menghapus barang');
        }

        // sukses
        return redirect('admin/barang')
            ->with('success', 'Berhasil menghapus barang');
    }
}
