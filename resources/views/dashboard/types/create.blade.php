@extends('dashboard.layout.app')
@section('title', 'Add New Type | ' . env('APP_NAME'))
@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-4 text-gray-800">Add New Type</h1>
        <a class="btn btn-dark" href="{{ route('dashboard.types.index') }}">All Types </a>
    </div>

    <div class="card">
        <div class="card_body">
            <form action="{{ route('dashboard.types.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <x-input name="name_en" label='English Name' placeholder="Enter Type Name" />
                    </div>
                    <div class="col-md-6">
                        <x-input name="name_ar" label='Arabic Name' placeholder="Enter Type Name" />
                    </div>
                </div>

                <x-input name="image" type='file' label='Image' />

                <button class="btn btn-dark m-3"><i class="fas fa-save"></i> Save</button>
            </form>
        </div>
    </div>
@endsection
