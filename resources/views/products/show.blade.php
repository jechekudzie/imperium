@extends('layouts.admin')
@section('page-title', $product->name)

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="card-title">{{ $product->name }}</h3>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-4">
                    @foreach ($product->images as $image)
                        <img src="{{ asset($image['path']) }}" alt="Product Image"  width="100%" class="mb-2">
                    @endforeach

                </div>
                <div class="col-md-8">
                    <p>{{ $product->description }}</p>
                    <p><strong>Product Category:</strong> {{ $product->category->name }}</p>
                    <p><strong>Price:</strong> ${{ $product->price }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
