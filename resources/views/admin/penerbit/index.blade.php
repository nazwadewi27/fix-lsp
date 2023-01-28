@extends('layouts.apps')
@section('content')
    <div class="container">
        @include('component.admin.sidebar')
        <div class="row justify-content-between">
            <div class="col-6 col-lg-6 col-md-6">
                <h3>Data Penerbit</h3>
            </div>
            <div class="col-6 col-lg-6 col-md-6 d-flex justify-content-end" style="margin-bottom: 0.5rem;">
                <button class="btn btn-primary">Tambah</button>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode</th>
                                <th>Nama Penerbit</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penerbit as $key => $p )
                               <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $p->kode }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->verif }}</td>
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