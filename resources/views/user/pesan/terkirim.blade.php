@extends('layouts.apps')
@section('content')
<div class="container">
    @include('component.user.sidebar')

    <div class="row">
        <div class="col-6">
            <h4>Pesan Terkirim</h4>
        </div>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Kirim Pesan
    </button>
    <div class="card mt-4">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>penerima</th>
                        <th>Judul pesan</th>
                        <th>isi pesan </th>
                        <th>status pesan</th>
                        <th>tanggal kirim</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesanTerkirim as $p)
                        <tr>
                            <td>{{  $loop->iteration }}</td>
                            <td>{{ $p->penerima->fullname }}</td>
                            <td>{{ $p->judul }}</td>
                            <td>{{ $p->isi }}</td>
                            <td>{{ $p->status }}</td>
                            <td>{{ $p->tanggal_kirim }}</td>
                            {{-- <td>{{ $p->denda }}</td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
    
        </div>  
    </div>
    
</div>
@include('user.pesan.form')
@endsection