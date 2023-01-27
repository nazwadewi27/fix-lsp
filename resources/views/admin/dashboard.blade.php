@extends('layouts.apps')
@section('content')
    <div class="container">
        @foreach ( $pemberitahuan as $p )
        <div class="alert alert-info">
            {{ $p->isi }}
        </div>
        @endforeach
        @include('component.admin.sidebar')
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <h3>{{ $data }}</h3>
                                <span style="color:#25396f">Data User</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <h3>{{ $buku }}</h3>
                                <span style="color:#25396f">Data Buku</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <h3>{{ $peminjaman }}</h3>
                                <span style="color:#25396f">Data Peminjaman</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3>{{ $pengembalian }}</h3>
                            <span style="color:#25396f">Data Pengembalian </span>
                        </div>
                    </div>
                </div>
            </div>

    </div>
@endsection
