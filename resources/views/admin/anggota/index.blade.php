@extends('layouts.apps')
@section('content')
    <div class="container">
        @include('component.admin.sidebar')

        <div class="row justify-content-between">
            <div class="col-6 col-lg-6 col-md-6">
                <h3>Data Anggota</h3>
            </div>
            <div class="col-6 col-lg-6 col-md-6 d-flex justify-content-end" style="margin-bottom: 0.5rem;">
                <button class="btn btn-primary">Tambah</button>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>kode Anggota</th>
                            <th>Nis</th>
                            <th>Nama Lengkap</th>
                            <th>Kelas</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($anggota as $key => $ang)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $ang->kode }}</td>
                                <td>{{ $ang->nis }}</td>
                                <td>{{ $ang->fullname }}</td>
                                <td>{{ $ang->kelas }}</td>
                                <td>{{ $ang->alamat }}</td>
                                <td>
                                    <button class="btn btn-primary">update</button>
                                    <button class="btn btn-danger">hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
