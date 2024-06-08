@extends('template')
@section('content')

    <div class="container mt-3">
        <h1>Status</h1>
        <a href="{{ route('status.create') }}">
            <button class="btn btn-primary">Buat</button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($status as $S)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $S->name }}</td>
                    <td class="d-flex">
                        <form action="{{ route('status.edit', $S->id) }}" method="get">
                            @csrf
                            <button class="btn btn-warning">Edit</button>
                        </form>
                        <form action="{{ route('status.delete', $S->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection