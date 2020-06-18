@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('navbar')

    <a class="navbar-brand" href="#">List Details</a>

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
                <h1 class="mt-3">List Mahasiswa</h1>

                <a href="details/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
                
                <!-- untuk memberu aller bila data ditambah -->
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <ul class="list-group">
                    @foreach($students as $student)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $student->nama }}
                        <!-- larravel bisa membaca /1 itu id -->
                        <a href="/details/{{ $student->id }}" class="badge badge-info">detail</a> 
                    </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>

@endsection