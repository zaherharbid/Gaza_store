@extends('dashboard.layout.app')
@section('title', 'Edit Product | ' . env('APP_NAME'))
@section('content')
    <!-- Page Heading -->

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-4 text-gray-800">Edit Product</h1>
        <a class="btn btn-dark" href="{{ route('dashboard.blogs.index') }}">All Products </a>
    </div>





    <div class="card">
        <div class="card_body">
            <form action="{{ route('dashboard.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <x-input name="name_en" label='English Name' placeholder="Enter New English Name"
                            value="{{ $product->name_en }}" />
                    </div>
                    <div class="col-md-6">
                        <x-input name="name_ar" label='Arabic Name' placeholder="Enter New Arabic Name"
                            value="{{ $product->name_ar }}" />
                    </div>
                </div>
                <x-input name="image" type='file' label='Image' />

                <div class="row">
                    <div class="col-md-6">
                        <x-input type="number" name="price" label='Price' placeholder="Enter New Product Price"
                            value="{{ $product->price }}" />
                    </div>
                    <div class="col-md-6">
                        <x-input type="number" name="sale_price" label='Sale Price'
                            placeholder="Enter New Product Sale Price" value="{{ $product->sale_price }}" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <x-textarea name="description_en" label='English Description'
                            placeholder="Enter New English Description" value="{{ $product->description_en }}" />
                    </div>
                    <div class="col-md-6">
                        <x-textarea name="description_ar" label='Arabic Description'
                            placeholder="Enter New Arabic Description" value="{{ $product->description_ar }}" />
                    </div>
                </div>


                <div class="mb-3">
                    <label>Type</label> {{ $product->type_id }}
                    <select name="type_id" class="form-control @error('type_id') is-invalid @enderror">
                        <option value="" disabled selected> -- Select Type -- </option>
                        @foreach ($types as $type)
                            <option @selected($product->type_id == $type->id) value="{{ $type->id }}">
                                {{ $type->id }} --
                                {{ $type->trans_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('type_id')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <button class="btn btn-dark m-3"><i class="fas fa-save"></i> Update</button>
            </form>
        </div>
    </div>




@endsection
