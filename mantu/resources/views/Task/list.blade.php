@extends('template')
@section('content')
    <div class="container">
        <h1>Data tugas</h1>
        <a href="{{ route('task.create') }}">
            <button class="btn btn-primary">Tambah</button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deadline</th>
                    <th>Deskripsi</th>
                    <th>Status</th>
                    <th>Category</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($task as $tasks)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $tasks['name'] }}</td>
                        <td>{{ $tasks['deadline'] }}</td>
                        <td>{{ $tasks['description'] }}</td>
                        <td>{{ $tasks->status->name }}</td>
                        <td>{{ $tasks->category->name }}</td>
                        <td>
                            <form action="{{ route('task.edit', $tasks->id) }}" method="get">
                                @csrf
                                <button class="btn btn-warning">Edit</button>
                            </form>
                            <form action="{{ route('task.delete', $tasks->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                            <form action="/detail/{{ $tasks['id'] }}" method="get">
                                <button class="btn btn-primary">Detail</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
