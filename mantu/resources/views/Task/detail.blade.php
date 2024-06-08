@extends('template')
@section('content')
    <div class="container">
        <h1 class="text-center">Detail Tugas</h1>
        <hr>

        <div class="card mt-2">
            <div class="card-body">
                <h4 class="card-title">{{ $tasks['name'] }}</h4>
                <small>{{ \Carbon\Carbon::parse($tasks['deadline'])->format('d F Y') }}</small> <br>
                <p class="card-text">{{ $tasks['description'] }}</p>

                <div class="mt-2">
                    <a href="/task" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
