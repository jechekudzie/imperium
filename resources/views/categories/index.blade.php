@extends('layouts.admin')
@section('page-title', 'Product Categories')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('categories.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Add New Category</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>
                                @if ($category->image)
                                    <img src="{{ asset($category->image) }}" alt="{{ $category->name }}" width="150">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('categories.show', $category->id) }}" class="btn btn-primary btn-sm mb-2"><i class="fas fa-eye"></i> View</a>
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm mb-2"><i class="fas fa-edit"></i> Edit</a>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm mb-2"><i class="fas fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
