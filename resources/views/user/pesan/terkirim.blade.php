@extends('layouts.app')
@section('content')
<div class="container">
    @include('component.user.sidebar')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Kirim Pesan
    </button>
</div>

@endsection