@extends('layouts.admin')
@section('page-title', $category->name)

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex">
                <h3 class="card-title">{{ $category->name }}</h3>
                <hr/>
                <div class="align-items-end">
                    <a href="{{ route('categories.index') }}" class="btn btn-primary">Back</a>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                </div>

            </div>
            <hr>

            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset($category->image) }}" alt="{{ $category->name }}" width="100%" class="mb-2">
                </div>
                <div class="col-md-8">
                    <p>{{ $category->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
