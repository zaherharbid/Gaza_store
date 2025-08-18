@extends('front.layout.master')
@section('title', 'Homepage | ' . env('APP_NAME'))

@section('content')
    <section class="hero"
        style="display:flex; align-items:center; justify-content:space-between; padding:60px 40px; gap:40px; flex-wrap:wrap;">
        <div class="hero-content" style="flex:1; min-width:300px;">
            <h2 style="font-size:36px; color:#222; margin-bottom:20px;">{{ $type->trans_name }}</h2>
            <p style="font-size:16px; color:#555; line-height:1.5;">
            </p>
        </div>
        <div class="hero-image" style="flex:1; min-width:300px; text-align:center;">
            <img src="{{ asset('storage/' . $type->image) }}" alt="{{ $type->trans_name }}"
                style="width:100%; max-width:400px; height:400px; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.1); object-fit:cover;object-position: top;">
        </div>
    </section>


    <section class="products">
        <span class="section-title">{{ __('website.products_subtitle') }}</span>
        <h2 class="section-title">{{ __('website.products_title') }}</h2>
        <p>{{ __('website.products_desc') }}</p>
        <div class="products-grid">
            @foreach ($type->products as $product)
                @include('front.products.box')
            @endforeach

        </div>
    </section>



@endsection
