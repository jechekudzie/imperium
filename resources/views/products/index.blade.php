@extends('layouts.admin')
@section('page-title', 'Products')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">

        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Product Type</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>

                        <div class="d-flex">
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary btn-sm mr-2">View</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                            </form>
                        </div>



                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
