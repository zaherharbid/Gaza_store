@extends('dashboard.layout.app')
@section('title', 'Edit Type | ' . env('APP_NAME'))
@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-4 text-gray-800">Edit Type</h1>
        <a class="btn btn-dark" href="{{ route('dashboard.types.index') }}">All Types </a>
    </div>

    <div class="card">
        <div class="card_body">
            <form action="{{ route('dashboard.types.update', $type->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <x-input name="name" label='Name' placeholder="Enter Type Name" value="{{ $type->name }}" />
                <x-input name="image" type='file' label='Image' value="{{ $type->image }}" />
                <button class="btn btn-dark m-3"><i class="fas fa-save"></i> Save</button>
            </form>
        </div>
    </div>
@endsection
