@extends('template')
@section('content')
    <div class="container">
        <h1 class="text-center">Daftar Tugas</h1>
        <div class="mt-2">
            <a href="{{ route('task.list') }}" class="btn btn-warning">List</a>
        </div>

        <div class="row">
            @foreach ($task as $tasks)
                <div class="col-12 col-md-4">
                    <div class="card mt-2">
                        <div class="card-body">
                            <h4 class="card-title">{{ $tasks['name'] }}</h4>
                            <small>{{ \Carbon\Carbon::parse($tasks['deadline'])->format('d F Y') }}</small> <br>
                            <p class="card-text">{{ Str::limit($tasks['description'], 40, '...') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection