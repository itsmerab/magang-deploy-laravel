@extends('layouts.admin.base')

@section('content')
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between align-intems-center mb-3">
            <div>
                <h2 class="mb-0 fw-bold">Barang</h2>
            </div>
            <div class="aksi">
                <a href="{{ url('admin/barang/tambah') }}"
                  class="btn btn-primary">TAMBAH</a>
            </div>
        </div>
        
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        
        @if (session('error'))
            <div class="alert alert-success">{{ session('error') }}</div>
        @endif

    <div class="card">
        <div class="card-header">
            <h4 class="mb-0 fw-bold text-dark">Daftar Barang</h4>
        </div>
        <div class="card-body pt-0">
            <table class="table table-bordered table-striped table-hover w-100">
                <thead>
                    <tr>
                        <th style="width: 40px">No</th>
                        <th class="text-center" style="width: 80px">Gambar</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Harga</th>
                        <th class="text-center">Stok</th>
                        <th class="text-center" style="width: 150px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listBarang as $Barang)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="text-center"> 
                            <img src="{{ $Barang->gambar_url }}" class="img-fluid">
                        </td>
                        <td>
                            <div class="badge bg-primary px-2">{{ $Barang->kategori?->nama ?? 'Tanpa Kategori' }}</div>
                
                            <div>{{ $Barang->nama }}</div>
                        </td>
                        <td>{{ $Barang->harga }}</td>
                        <td>{{ $Barang->stok }}</td>
                        <td class="text-center">
                            <a href="{{ url('admin/barang/' . $Barang->id . '/ubah') }}" class="btn btn-secondary">
                                <i class="align-middle" data-feather="edit"></i>
                            </a>
                            <form action="{{ url('admin/barang/' . $Barang->id) }}" method="POST" class="d-inline-block"
                                onsubmit="return confirm('Apakah anda yakin menghapus data ini ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                      <i class="align-middle" data-feather="trash-2"></i>
                                </button>
                            </form>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
