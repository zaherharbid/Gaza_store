@extends('dashboard.layout.app')
@section('title', 'All Types | ' . env('APP_NAME'))
@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-4 text-gray-800">All Types</h1>
        <a class="btn btn-dark" href="{{ route('dashboard.types.create') }}">Add new Type </a>

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
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($types as $type)
                        <tr>
                            <td>{{ $type->id }}</td>
                            <td><img width="70" class="img-thumbnail" src="{{ asset('storage/' . $type->image) }}"
                                    alt=""></td>
                            <td>{{ $type->name }}</td>
                            <td>{{ $type->created_at->toDateString() }}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{ route('dashboard.types.edit', $type->id) }}"><i
                                        class="fas fa-edit"></i></a>
                                <form class="d-inline" action="{{ route('dashboard.types.destroy', $type->id) }}"
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
                            <td colspan="5" class="text-center">No Data Found</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
            {{ $types->links() }}
        </div>
    </div>
@endsection
