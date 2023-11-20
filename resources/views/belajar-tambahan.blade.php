@extends('layouts.base')

@section('judul')
    Belajar Laravel Blade layouting
  @endsection

@section('isi-utama')
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, iste?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Tempora blanditiis doloremque facilis accusamus. Illum obcaecati consectetur 
        cumque doloremque consequatur excepturi officiis dolores consequuntur, 
        officia temporibus nesciunt laboriosam nobis eius reiciendis.</p>    
  @endsection

@section('isi-kiri')
    <div class="card">
        <div class="card-body">
            ini adalah card dari bootstrap
        </div>
    </div>
  @endsection

@section('isi-kanan')
    <div class="alert alert-primary">
        ini adalah alert dari bootstrap
    </div>
  @endsection      