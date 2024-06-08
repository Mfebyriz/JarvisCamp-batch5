@extends('template')
@section('content')
    <div class="container">
        <h1>Edit Project</h1>
        <div class="card">
            <div class="card-body">
                @if (count($errors) > 0)
                    <div class="alert alert-dang">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('project.update', $project->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group row mb-3">
                        <label class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="name" value="{{ $project->name }}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-4 col-form-label">Deskripsi</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="description"
                                value="{{ $project->description }}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-4 col-form-label">Status</label>
                        <div class="col-8">
                            <select name="status_id" id="" class="form-control" value="{{ $project->status_id }}">
                                @foreach ($status as $S)
                                    <option value="{{ $S->id }}">{{ $S->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-4 col-form-label">Category</label>
                        <div class="col-8">
                            <select name="categories_id" id="" class="form-control"
                                value="{{ $project->category_id }}">
                                @foreach ($categories as $C)
                                    <option value="{{ $C->id }}">{{ $C->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-4 col-form-label">Start</label>
                        <div class="col-8">
                            <input type="date" class="form-control" name="start_date"
                                value="{{ $project->start_date }}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-4 col-form-label">End</label>
                        <div class="col-8">
                            <input type="date" class="form-control" name="end_date" value="{{ $project->end_date }}">
                        </div>
                    </div>
                    <button class="btn btn-warning">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
