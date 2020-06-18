@extends('layout/main')

@section('title', 'Form Create Data')

@section('navbar')

    <a class="navbar-brand" href="#">Form Create Data</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <!-- penggunaan {{ url('/') }} >> untuk terkonek dengan localhost tidak hanya tekonek dengan port -->
                    <a class="nav-link" href="{{ url('/') }}">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/details">Details</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>

@endsection

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Form Create Data</h1>

                <form method="post" action="/details">
                @csrf
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
                        <div class="invalid-feedback">
                            Nama mahasiswa tidak boleh kosong!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nrp">NRP:</label>
                        <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan NRP" name="nrp" value="{{ old('nrp') }}">
                        <div class="invalid-feedback">
                            NRP mahasiswa tidak boleh kosong!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{ old('email') }}">
                        <div class="invalid-feedback">
                            Email mahasiswa tidak boleh kosong!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan:</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{ old('jurusan') }}">
                        <div class="invalid-feedback">
                            Jurusan mahasiswa tidak boleh kosong!
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>

            </div>
        </div>
    </div>

@endsection