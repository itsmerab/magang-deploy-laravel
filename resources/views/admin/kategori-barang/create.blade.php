@extends('layouts.admin.base')

@section('content')
    <div class="container-fluid p-0">
      <a href="{{ url('admin/kategori-barang.index') }}"
        class="btn btn-seconndary">KEMBALI</a>

      <div class="d-flex justify-content-between align-items-center my-3">
        <div>
            <h2 class="mb-0 fw-bold">Tambah Kategori Barang</h2>
        </div>
      </div>

      @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>        
      @endif

        <form class="card" 
          action="{{ url('admin/kategori-barang') }}"
          method="POST">
          <div class="card-body">
            @csrf
            <div class="mb-3">
                <label class="from-label fw-bold text-dark">Nama Kategori Barang</label>
                <input type="text"
                  class="form-control"
                  name="nama"
                  value="{{ old('nama') }}">
            
            @error('nama')
              <div class="alert alert-danger mt-2">{{ $message }}</div>              
            @enderror      
            </div>
            <div class="mb-3">
                <label class="from-label fw-bold text-dark">Keterangan</label>
                <textarea 
                  class="form-control"
                  name="keterangan" 
                  >{{ old('keterangan') }}</textarea>            
            @error('keterangan')
              <div class="alert alert-danger mt-2">{{ $message }}</div>              
            @enderror      
            </div>

        <div class="card-footer bg-light text-end">
            <button type="submit"
              class="btn btn-primary">SIMPAN</button>
        </div>
      </form>
      </div>
    </div>    
@endsection