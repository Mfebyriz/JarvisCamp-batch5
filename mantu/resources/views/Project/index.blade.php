@extends('template')
@section('content')

    <div class="container mt-3">
        <h1>Project</h1>
        <a href="{{ route('project.create') }}">
            <button class="btn btn-primary">Buat</button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Status</th>
                    <th>Category</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$project->name}}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->status->name }}</td>
                    <td>{{ $project->category->name }}</td>
                    <td>{{ $project->start_date }}</td>
                    <td>{{ $project->end_date }}</td>
                    <td class="d-flex">
                        <form action="{{ route('project.edit', $project->id) }}" method="get">
                            @csrf
                            <button class="btn btn-warning">Edit</button>
                        </form>
                        <form action="{{ route('project.delete', $project->id) }}" method="post">
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