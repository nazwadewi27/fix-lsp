@extends('layouts.apps')
@section('content')
    <div class="container">
        @include('component.user.sidebar')
    </div>
    <div class="row">
        <div class="col-6">
            <h3>Pesan Masuk</h3>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>pengirim</th>
                        <th>Judul pesan</th>
                        <th>isi pesan </th>
                        <th>status pesan</th>
                        <th>tanggal kirim</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesanMasuk as $p)
                        <tr>
                            <td>{{  $loop->iteration }}</td>
                            <td>{{ $p->pengirim->fullname }}</td>
                            <td>{{ $p->judul }}</td>
                            <td>{{ $p->isi }}</td>
                            <td>{{ $p->status == 'terkirim' ? 'belum dibaca' : 'terbaca' }}</td>
                            <td>{{ $p->tanggal_kirim }}</td>
                            <td>
                                @if ($p->status == 'terkirim')
                                    <form action="{{ route('user.pesan.masuk.update', ['id' => $p->id]) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="penerima_id" value="{{ Auth::user()->id }}">
                                        <button type="submit" class="btn btn-success">update
                                        </button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection