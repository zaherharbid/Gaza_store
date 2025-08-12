@extends('dashboard.layout.app')
@section('title', 'Add New Product | ' . env('APP_NAME'))
@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-4 text-gray-800">Add New Product</h1>
        <a class="btn btn-dark" href="{{ route('dashboard.products.index') }}">All Products </a>
    </div>

    <div class="card">
        <div class="card_body">
            <form action="{{ route('dashboard.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <x-input name="name_en" label='English Name' placeholder="Enter English Name" />
                    </div>
                    <div class="col-md-6">
                        <x-input name="name_ar" label='Arabic Name' placeholder="Enter Arabic Name" />
                    </div>
                </div>
                <x-input name="image" type='file' label='Image' />

                <x-input type="number" name="price" label='Price' placeholder="Enter Product Price" />
                <div class="row">
                    <div class="col-md-6">
                        <x-textarea name="description_en" label='English Description'
                            placeholder="Enter English Description" />
                    </div>
                    <div class="col-md-6">
                        <x-textarea name="description_ar" label='Arabic Description'
                            placeholder="Enter Arabic Description" />
                    </div>
                </div>
                <div class="mb-3">
                    <label>Type</label>
                    <select name="type_id" class="form-control @error('type_id') is-invalid @enderror">
                        <option value="" disabled selected> -- Select Type -- </option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->trans_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('type_id')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <button class="btn btn-dark m-3"><i class="fas fa-save"></i> Save</button>
            </form>
        </div>
    </div>
@endsection
