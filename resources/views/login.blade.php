@extends('layouts.admin.base-blank')

@section('content')
<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
    <div class="d-table-cell align-middle">

        <div class="text-center mt-4">
            <h1 class="h2">Magang Latihan Laravel</h1>
            <p class="lead">Silahkan login untuk melanjutkan</p>
        </div>

    <div class="card">
        <div class="card-body">
            <div class="m-sm-3">
                <form action="{{ url('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control form-control-lg"
                            type="email"
                            name="email" 
                            placeholder="masukkan alamat email" 
                            value="{{ old('email') }}"
                            />
                        @error('email')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kata Sandi</label>
                        <input class="form-control form-control-lg" 
                            type="password"
                            name="password" 
                            placeholder="masukkan kata sandi" />
                        @error('password')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-grid gap-2 mt-3">
                      <button type="submit"
                        class="btn btn-lg btn-primary">MASUK</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection