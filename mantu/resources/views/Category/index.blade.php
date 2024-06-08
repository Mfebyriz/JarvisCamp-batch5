@extends('template')
@section('content')

    <div class="container mt-3">
        <h1>Category</h1>
        <a href="{{ route('category.create') }}">
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
                @foreach ($category as $C)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $C->name }}</td>
                        <td class="d-flex">
                            <form action="{{ route('category.edit', $C->id) }}" method="get">
                                @csrf
                                <button class="btn btn-warning">Edit</button>
                            </form>
                            <form action="{{ route('category.delete', $C->id) }}" method="post">
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
