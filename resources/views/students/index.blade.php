@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('navbar')

    <a class="navbar-brand" href="#">Mahasiswa</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <!-- penggunaan {{ url('/') }} >> untuk terkonek dengan localhost tidak hanya tekonek dengan port -->
                    <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
                </li>
                <li class="nav-item">
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
            <div class="col-10">
                
                <h1 class="mt-3">Daftar Mahasiswa</h1>

                <table class="table">
                    <thead class="thead-dark" style="text-align:center;">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NRP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody style="text-align:center;">
                        @foreach( $students as $std )
                        <tr>
                        <!-- fungsi double cruly bracket >> untuk mengkoneksikan ke DB atau menggunakan library yang sudah tersedia didalam laravel dan dapat dilihat didalam dokumentasi -->
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $std->nama }}</td>
                        <td>{{ $std->nrp }}</td>
                        <td>{{ $std->email }}</td>
                        <td>{{ $std->jurusan }}</td>
                        <td>
                            <a href="details/{{ $std->id }}/edit" class="badge badge-success">Edit</a>
                            <a href="" class="badge badge-danger">Delete</a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection