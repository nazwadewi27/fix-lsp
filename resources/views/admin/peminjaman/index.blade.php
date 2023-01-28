@extends('layouts.apps')
@section('content')
    <div class="container">
        @include('component.admin.sidebar')
        <div class="row">
            <h3>Data Peminjaman</h3>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Anggota</th>
                                <th>Judul Buku</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Kondisi Buku saat dipinjam</th>
                                <th>Kondisi Buku saat dikembalikan</th>
                                <th>Denda</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peminjaman as $key => $p )
                               <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $p->user->fullname }}</td>
                                <td>{{ $p->buku->judul }}</td>
                                <td>{{ $p->tanggal_peminjaman }}</td>
                                <td>{{ $p->tanggal_pengembalian }}</td>
                                <td>{{ $p->kondisi_buku_saat_dipinjam }}</td>
                                <td>{{ $p->kondisi_buku_saat_dikembalikan }}</td>
                                <td>{{ $p->peminjaman }}</td>
                                <td>
                                    <button class="btn btn-primary">update</button>
                                    <button class="btn btn-danger">hapus</button></td>
                               </tr>
                                
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection