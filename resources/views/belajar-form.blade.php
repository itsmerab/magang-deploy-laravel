@extends('layouts.base')

@section('judul')
    Belajar Laravel - From Request
@endsection

@section('isi-utama')
<form action="{{ url('belajar-form') }}" method="POST">
    @csrf
    <div class="from-groub mb-3">
        <label for="nama" class="from-label">Nama Lengkap</label>
        <input 
            type="text"
            class="from-control" 
            name="nama" 
            placeholder="masukkan nama lengkap"
            value="{{ old('nama') }}"
            >

        @error('nama')
            <div class="alert alert-danger mt-3">{{ $message }}</div>
        @enderror
    </div>

    <div class="from-groub mb-3">
        <label for="panggilan" class="from-label">Nama Panggilan</label>
        <input 
            type="text" 
            class="from-control" 
            name="panggilan" 
            placeholder="masukkan nama panggilan"
            value="{{ old('panggilan') }}"
            >

        @error('panggilan')
            <div class="alert alert-danger mt-3">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">SIMPAN</button>
</form>
@endsection