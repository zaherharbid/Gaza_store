@extends('front.layout.master')

@section('title', $product->trans_name . ' | ' . env('APP_NAME'))

@section('content')
    <main class="container">
        <section class="product">
            <div class="product-image">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->trans_name }}">
            </div>

            <div class="product-info">
                <h1>{{ __('website.product_name') }} <span
                        style="color: green; font-weight: bold; font-size: 20px; ">{{ $product->trans_name }}</span></h1>
                <h3 class="category">{{ __('website.product_type') }} <span
                        style="color: green; font-weight: bold; font-size: 20px; ">{{ $product->type?->trans_name }}</span>
                </h3>
                <h3 class="price">
                    {{ __('website.product_price') }}: <span style="color: green; font-weight: bold; font-size: 20px;">
                        ${{ $product->sale_price ?? $product->price }}
                        @if ($product->sale_price)
                            <span class="old-price">${{ $product->price }}</span>
                        @endif
                    </span>
                </h3>

                <div class="description">
                    <h3>{{ __('website.product_description') }} <span
                            style="color: green; font-weight: bold; font-size: 20px; ">{{ $product->trans_description }}</span>
                    </h3>
                </div>
                <!-- Rating & Reviews Section -->
                <section class="rating-info mt-4">
                    <h3 class="mb-4">{{ __('website.ratings&views') }} </h3>
                    <div class="d-flex flex-wrap gap-4">

                        <!-- Overall Score -->
                        <div class="score text-center" style="min-width:200px;">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="score-text mb-3">
                                    <span
                                        style="font-size: 36px; font-weight: bold;">{{ number_format($product->reviews->avg('review'), 1) }}</span>
                                    <span style="font-size: 18px; color: #555;">/ {{ $product->reviews->count() }}
                                        Reviews</span>
                                </div>

                                <div class="score-rate">
                                    @for ($i = 5; $i >= 1; $i--)
                                        <div class="d-flex align-items-center mb-1">
                                            <i class="fa-solid fa-star" style="color: #FFD900; font-size: 16px;"></i>
                                            <span class="mx-2">{{ $i }}</span>
                                            <div style="flex:1; height:6px; background:#eee; border-radius:3px;">
                                                <div
                                                    style="width:{{ rand(10, 95) }}%; height:6px; background:#FFD900; border-radius:3px;">
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>

                        </div>

                        <!-- Single Review Example -->
                        <div class="review flex-grow-1">
                            <div class="d-flex align-items-center mb-2">
                                <img src="{{ asset('assets/img/avatar.png') }}" width="40" class="rounded-circle">
                                <span class="ms-2 fw-bold">Alex Mohamed</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div>
                                    @for ($s = 1; $s <= 5; $s++)
                                        <i class="fa-solid fa-star" style="color: #FFD900; font-size: 14px;"></i>
                                    @endfor
                                </div>
                                <small class="text-muted">13 Oct 2024</small>
                            </div>
                            <p class="mb-0 text-muted"> very good quality and fast
                                delivery.</p>
                        </div>

                    </div>
                </section>
                <!-- Social Share -->
                <section class="social-share mt-4">
                    <h3 class="text-success mb-3" style="font-size:18px;">{{ __('website.product_share') }}</h3>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-facebook-messenger"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-x-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-snapchat"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-telegram"></i></a>
                    </div>
                </section>

                <div class="btn-div">
                    <button class="add-to-cart">{{ __('website.purchase_button') }}</button>
                    <a href="#" style="color: black;"><i class="fa-regular fa-heart btn-icon"></i></a>
                </div>
            </div>
        </section>
        <!-- You Might Also Like -->
        <section class="recommendations">
            <div style="text-align:center">
                <span style="color: green; font-size:14px">{{ $product->type->trans_name }}</span>
                <h2>{{ __('website.related') }}</h2>
            </div>

            <div class="products">
                @foreach ($related as $item)
                    @include('front.products.box', ['product' => $item])
                @endforeach
            </div>
        </section>

    </main>
@endsection
