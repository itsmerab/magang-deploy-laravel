@extends('layouts.admin.base')

@section('content')
    <div class="container-fluid p-0">
        <a href="{{ url('admin/kategori-barang') }}"
        class="btn btn-secondary">KEMBALI</a>

        <div class="d-flex justify-content-between align-item-center my-3">
            <div>
                <h2 class="fw-bold mb-0">Ubah Kategori Barang</h2>
            </div>
        </div>

        @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>    
        @endif

        <form class="card"
        action="{{ url('admin/kategori-barang' . $barang->id) }}"
        method="POST">
            @csrf
            @method('PUT')
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
                <label class="form-label fw-bold text-dark">Keterangan</label>
                <input type="number"
                    class="form-control"
                    name="harga"
                    value="{{ old('harga', $barang->harga) }}">
                
                @error('harga')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>                    
                @enderror  
            </div>
            
          </div>
          <div class="card-footer bg-light text-end">
            <button type="submint"
                class="btn -btn-primary">SIMPAN</button>
          </div>
        </form>
    </div>
@endsection