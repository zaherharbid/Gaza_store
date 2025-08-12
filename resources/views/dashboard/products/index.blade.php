@extends('dashboard.layout.app')
@section('title', 'All Products | ' . env('APP_NAME'))
@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-4 text-gray-800">All Products</h1>
        <a class="btn btn-dark" href="{{ route('dashboard.products.create') }}">Add new Product </a>

    </div>
    <div class="container my-3">
        @if (session('msg'))
            <div class="alert alert-{{ session('type') ?? 'success' }}  alert-dismissible fade show" role="alert">
                {{ session('msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>
    <div class="card">
        <div class="card_body">
            <table class="table table-hover">
                <thead>
                    <tr class="bg-dark text-white">
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Type</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td><img width="70" class="img-thumbnail" src="{{ asset('storage/' . $product->image) }}"
                                    alt=""></td>
                            <td>{{ $product->trans_name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->type_id }}</td>
                            <td>{{ $product->created_at->toDateString() }}</td>
                            <td>
                                <a class="btn btn-sm btn-primary"
                                    href="{{ route('dashboard.products.edit', $product->id) }}"><i
                                        class="fas fa-edit"></i></a>
                                <form class="d-inline" action="{{ route('dashboard.products.destroy', $product->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('delete')
                                    <button onclick="return confirm('Are You Sure?!')" class="btn btn-sm btn-danger"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No Data Found</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
            {{ $products->links() }}
        </div>
    </div>
@endsection
