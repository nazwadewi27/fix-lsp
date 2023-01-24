@extends('layouts.apps')
@section('content')
    <div class="container">
        @include('component.user.sidebar')

        <div class="card">
            <div class="card-header">
                <h4>Formulir Pengembalian</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('submit.pengembalian') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="">Pilih buku yang dikembalikan</label>
                        <select name="buku_id" id="" class="form-select">
                            <option>Pilih opsi</option>
                            @foreach ($judul as $j)
                                <option value="{{ $j->buku->id }}">{{ $j->buku->judul }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Tanggal Pengembalian</label>
                        <input type="date" class="form-control" name="tanggal_pengembalian" value="{{ date('Y-m-d') }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="">Kondisi buku yang dikembalikan</label>
                        <select name="kondisi_buku_saat_dikembalikan" id="" class="form-select">
                            <option value="" disabled selected>Pilih Opsi</option>
                            <option value="baik">Baik</option>
                            <option value="rusak">Rusak</option>
                            <option value="hilang">Hilang</option>
                        </select>
                    </div>
                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                   <button type="submit" class="btn btn-primary">Submit</button>
                </form>                
            </div>
        </div>
        
    </div>
@endsection
{{-- <div class="container">
    @include('component.user.sidebar')

        
</div> --}}