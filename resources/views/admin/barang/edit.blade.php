@extends('layouts.admin.base')

@section('content')
    <div class="container-fluid p-0">
        <a href="{{ url('admin/barang') }}"
        class="btn btn-secondary">KEMBALI</a>

        <div class="d-flex justify-content-between align-item-center my-3">
            <div>
                <h2 class="fw-bold mb-0">Ubah Barang</h2>
            </div>
        </div>

        @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>    
        @endif

        <form class="card"
        action="{{ url('admin/barang' . $barang->id) }}"
        method="POST">
        <div class="card-body">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label fw-bold text-dark">Kategori Barang</label>
                
                <select name="kategori" class="form-control">
                    <option value="">Pilih Kategori barang</option>
                    @foreach ($listkategori as $kategori)
                    <option value="{{$kategori->id}}"@selected(old('kategori',$barang->kategori_id) == $kategori->id)>{{$kategori->nama}}</option>                
                    @endforeach
            </select>
                @error('kategori')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold text-dark">Nama Barang</label>
                <input type="text"
                    class="form-control"
                    name="nama"
                    value="{{ old('nama', $barang->nama) }}">
                
                @error('nama')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>                    
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold text-dark">Harga Barang</label>
                <input type="number"
                    class="form-control"
                    name="harga"
                    value="{{ old('harga', $barang->harga) }}">
                
                @error('harga')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>                    
                @enderror    
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold text-dark">Stok Barang</label>
                <input type="number"
                    class="form-control"
                    name="stok"
                    value="{{ old('stok', $barang->stok) }}">
                
                @error('stok')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>                    
                @enderror    
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold text-dark">Keterangan</label>
                <input type="number"
                    class="form-control"
                    name="harga"
                    value="{{ old('harga', $barang->harga) }}">
                
                @error('harga')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>                    
                @enderror
                <div class="mb-3">
                    <label class="form-label fw-bold text-dark">Gambar <small class="fw-normal">(Silahkan Dikosongkan jika tidak ingin mengganti gambar )</small></label>
                    @if ($barang->gambar)
                        <div class="text-center mb-4">
                            <img src="{{ url('uploads/barang/' . $barang->gambar) }}">
                        </div>
                    @endif
                    <input type="file" name="gambar" class="form-control">
                    @error('gambar')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>  
              </div>
            </div>
          </div>
          <div class="card-footer bg-light text-end">
            <button type="submint"
                class="btn -btn-primary">SIMPAN</button>
          </div>
        </form>
@endsection