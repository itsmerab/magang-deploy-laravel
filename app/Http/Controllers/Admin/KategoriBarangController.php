<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\KategoriBarang;
use Illuminate\Http\Request;

class KategoriBarangController extends Controller
{
   
    public function index(Request $request)
    {
        $listBarang = KategoriBarang::get();

        return view('admin.kategori-barang.index', [
            'listBarang' => $listBarang,
        ]);
    }  
    public function create(Request $request)
    {
        $listkategori = KategoriBarang::get();

        return view('admin.kategori-barang.create', [
            'listkategori' => $listkategori,
        ]);
    }
    public function store(Request $request)
    {
        // validasi
        $input = $request->validate([
            'nama'          => 'required',
            'keterangan'    => 'nullable',
        ]);

        // membuat data barang
        $kategoribarang = new KategoriBarang();
        $kategoribarang->nama = $request->nama;
        $kategoribarang->keterangan = $request->keterangan;

        // cara apakah gagal menyimpan
        if (! $kategoribarang->save()) {
            return redirect()
                ->back()
                ->with('error','Gagal menyimpan data barang');
        }

        // berhasil
        return redirect()
            ->route('admin.kategori-barang.index')
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
            'nama'          => 'required',
            'harga'         => 'required|numeric',
            'stok'          => 'required|numeric',
        ]);

        // cari barang
        $barang = Barang::find($id);
        if (! $barang) {
            return redirect('admin/barang')
                ->with('error' , 'Data barang tidak ditemukan');
        }

        // ubah data barang
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;

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