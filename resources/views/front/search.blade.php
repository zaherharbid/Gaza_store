@extends('front.layout.master')

@section('title', 'Homepage | ' . env('APP_NAME'))

@section('css')
    <style>
        .home-text h1 {
            width: 60%;
        }
    </style>

    @if (app()->getLocale() == 'ar')
        <style>
            .home {
                background-image: url({{ asset('assets/img/Background-home-ar.png') }})
            }

            .products {
                width: 100%;
                padding: 60px 20px;
            }

            .products-container {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 25px;
                width: 100%;
            }
        </style>
    @endif
@endsection

@section('content')
    <!-- Home -->
    <section class="home" id="home" style="min-height: 60px">
        <div class="home-text"> <br>
            <h2 class="sec-title">{{ __('website.search_result') }} {{ request()->q }} </h2>
        </div>
    </section>

    <section class="products" style="display:flex; justify-content:center; flex-wrap:wrap; padding:40px 20px;">
        @foreach ($products as $product)
            <div style="display:flex; justify-content:center; margin:25px;">
                @include('front.products.box')
            </div>
        @endforeach
    </section>

@endsection
