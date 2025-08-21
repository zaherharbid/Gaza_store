@extends('front.layout.master')
@section('title', 'Homepage | ' . env('APP_NAME'))

<style>
    .types {
        padding: 40px 20px;
    }

    .types span.section-title,
    .types h2.section-title,
    .types p {
        text-align: center;
        display: block;
        margin: 0 auto 12px;
    }

    .types span.section-title {
        font-size: 16px;
        color: #777;
        font-weight: 500;
        margin-bottom: 8px;
    }

    .types h2.section-title {
        font-size: 28px;
        font-weight: 700;
        color: #222;
        margin-bottom: 12px;
    }

    .types p {
        font-size: 16px;
        color: #555;
        max-width: 600px;
        margin: 0 auto 30px;
        line-height: 1.5;
    }

    .types-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .type-card {
        width: 220px;
        border-radius: 12px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease;
    }

    .type-card:hover {
        transform: translateY(-5px);
    }

    .type-card a {
        display: block;
        position: relative;
        text-decoration: none;
        color: inherit;
    }

    .type-card img {
        width: 100%;
        height: 160px;
        object-fit: cover;
        display: block;
    }

    .type-card h2 {
        position: absolute;
        bottom: 8px;
        left: 8px;
        margin: 0;
        padding: 4px 10px;
        font-size: 14px;
        font-weight: 600;
        color: #fff;
        background: rgba(0, 0, 0, 0.6);
        border-radius: 6px;
        pointer-events: none;
    }
</style>
@section('content')
    {{-- @dump(app()->getLocale()) --}}
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1> {{ __('website.hero') }}</h1>
            <p>{{ __('website.hero_text') }}</p>
            <button class="shop-now">{{ __('website.hero_btn') }}</button>
            <p class="style-discover">{{ __('website.hero_discription') }}</p>
        </div>
        <div class="hero-image">
            <img src="{{ asset('assets/img/home.png') }}" alt="Shopping Illustration" />
        </div>
    </section>

    <section class="types">
        <span class="section-title">{{ __('website.types_subtitle') }}</span>
        <h2 class="sec-title">{{ __('website.types_title') }}</h2>
        <p>{{ __('website.types_desc') }}</p>
        <div class="types-container">
            @foreach ($types as $type)
                <div class="type-card">
                    <a href="{{ route('front.type', $type->id) }}">
                        <img src="{{ asset('storage/' . $type->image) }}" alt="{{ $type->trans_name }}" />
                        <h2>{{ $type->trans_name }}</h2>
                    </a>
                </div>
            @endforeach
        </div>
    </section>


    {{-- <section class="categories-wrapper">
        <h2 class="categories-title">Categories</h2>
        <div class="categories-grid">
            <a href="{{ route('front.category', 1) }}" class="category-link" style="text-decoration: none;">
                <div class="category-box" style="background:#ffe5e5; cursor: pointer;">
                    <h4>Shirts</h4>
                    <p>Dress Shirts, Polo Shirts, Casual Shirts</p>
                </div>
            </a>
            <a href="{{ route('front.category', 1) }}" class="category-link" style="text-decoration: none;">
                <div class="category-box" style="background:#e0e7ff; cursor: pointer;">
                    <h4>Pants</h4>
                    <p>Jeans, Chinos, Dress Pants</p>
                </div>
            </a>
            <a href="{{ route('front.category', 1) }}" class="category-link" style="text-decoration: none;">
                <div class="category-box" style="background:#e0f7fa; cursor: pointer;">
                    <h4>Jackets</h4>
                    <p>Leather Jackets, Denim Jackets</p>
                </div>
            </a>
            <a href="{{ route('front.category', 1) }}" class="category-link" style="text-decoration: none;">
                <div class="category-box" style="background:#fff3e0; cursor: pointer;">
                    <h4>T-Shirts</h4>
                    <p>Graphic Tees, Plain Tees</p>
                </div>
            </a>
            <a href="{{ route('front.category', 1) }}" class="category-link" style="text-decoration: none;">
                <div class="category-box" style="background:#ede7f6; cursor: pointer;">
                    <h4>Suits</h4>
                    <p>Two-Piece Suit, Three-Piece Suit</p>
                </div>
            </a>
            <a href="{{ route('front.category', 1) }}" class="category-link" style="text-decoration: none;">
                <div class="category-box" style="background:#f3e5f5; cursor: pointer;">
                    <h4>Shoes</h4>
                    <p>Dress Shoes, Casual Shoes</p>
                </div>
            </a>
            <a href="{{ route('front.category', 1) }}" class="category-link" style="text-decoration: none;">
                <div class="category-box" style="background:#fbe9e7; cursor: pointer;">
                    <h4>Accessory</h4>
                    <p>Watches, Belts, Hats</p>
                </div>
            </a>
            <a href="{{ route('front.category', 1) }}" class="category-link" style="text-decoration: none;">
                <div class="category-box" style="background:#f1f8e9; cursor: pointer;">
                    <h4>Sportswear</h4>
                    <p>Athletic Shorts, Track Pants</p>
                </div>
            </a>
            <a href="{{ route('front.category', 1) }}" class="category-link" style="text-decoration: none;">
                <div class="category-box" style="background:#e8f5e9; cursor: pointer;">
                    <h4>Outerwear</h4>
                    <p>Coats, Jackets, Parkas</p>
                </div>
            </a>
            <a href="{{ route('front.category', 1) }}" class="category-link" style="text-decoration: none;">
                <div class="category-box" style="background:#fce4ec; cursor: pointer;">
                    <h4>Loungewear</h4>
                    <p>Sweatpants, Robes, Pajamas</p>
                </div>
            </a>
            <a href="{{ route('front.category', 1) }}" class="category-link" style="text-decoration: none;">
                <div class="category-box" style="background:#e0f2f1; cursor: pointer;">
                    <h4>Underwear</h4>
                    <p>Boxers, Briefs, Trunks</p>
                </div>
            </a>
            <a href="{{ route('front.category', 1) }}" class="category-link" style="text-decoration: none;">
                <div class="category-box" style="background:#edeef0; cursor: pointer;">
                    <h4>Nightwear</h4>
                    <p>Pajama Sets, Nightgowns</p>
                </div>
            </a>
        </div>
    </section> --}}

    <!-- Recent Products Carousel -->
    <section class="recent-products">
        <div class="section-header">
            <h2 class="sec-title">{{ __('website.all_product') }}</h2>
            <a href="#" class="view-all">{{ __('website.view_all') }}</a>
        </div>
        <div class="carousel-container" id="carousel">
            <!-- Repeat Card -->
            @foreach ($products as $product)
                @include('front.products.box')
            @endforeach


        </div>
    </section>

    <!-- Best seller Products Carousel -->
    <section class="recent-products">
        <div class="section-header">
            <h2 class="sec-title">{{ __('website.recent_products') }}</h2>
            <a href="#" class="view-all">{{ __('website.view_all') }}</a>
        </div>
        <div class="carousel-container" id="carousel">
            <!-- Repeat Card -->
            @foreach ($products as $product)
                @include('front.products.box')
            @endforeach


        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-us">
        <div class="about-content">
            <div class="about-image">
                @php
                    $src = 'assets/img/aboutUs.png';
                    if (isset($settings['about_image'])) {
                        $src = 'storage/' . $settings['about_image'];
                    }

                @endphp
                <img src="{{ asset($src) }}" alt="About Image" />
            </div>
            <div class="about-text">
                <span class="section-title">{{ $settings['about_subtitle_' . app()->getLocale()] ?? 'About Us' }}</span>
                <h3>{{ $settings['about_title_' . app()->getLocale()] ?? 'The best fashion and the lowest prices are found here.' }}
                </h3>
                <p>
                    {{ $settings['about_desc_' . app()->getLocale()] ?? 'Our store offers the latest fashion trends with high quality and affordable prices, giving you a stylish and unique shopping experience.' }}
                </p>
            </div>

        </div>

        <div class="about-heading">
            <div class="multi-border">
                <h3> <span> {{ __('website.why_are') }}</span></h3>
            </div>
        </div>

        <div class="features-grid">
            <div class="feature-box" style="box-shadow: 1px 1px 8px #640020;">
                <i class="fas fa-tshirt"></i>
                <h4>{{ __('website.diverse_products') }}</h4>
                <p>{{ __('website.diverse_products_desc') }}</p>
            </div>
            <div class="feature-box" style="box-shadow: 1px 1px 8px #19853F;">
                <i class="fas fa-clipboard-check"></i>
                <h4>{{ __('website.high_quality') }}</h4>
                <p>{{ __('website.high_quality_desc') }}</p>
            </div>
            <div class="feature-box" style="box-shadow: 1px 1px 8px #001A72;">
                <i class="fas fa-thumbs-up"></i>
                <h4>{{ __('website.honesty') }}</h4>
                <p>{{ __('website.honesty_desc') }}</p>
            </div>
            <div class="feature-box" style="box-shadow: 1px 1px 8px #790E79;">
                <i class="fas fa-tags"></i>
                <h4>{{ __('website.competitive') }}</h4>
                <p>{{ __('website.competitive_desc') }}</p>
            </div>
            <div class="feature-box" style="box-shadow: 1px 1px 8px #9FB60D;">
                <i class="fas fa-headphones-alt"></i>
                <h4>{{ __('website.customer') }}</h4>
                <p>{{ __('website.customer_desc') }}</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <span class="section-title">{{ __('website.blogs') }}</span>
        <h2 class="sec-title">{{ __('website.blogs_title') }}</h2>
        <p>{{ __('website.blogs_desc') }}</p>
        <div class="testimonials-grid">
            @foreach ($blogs as $blog)
                <div class="blog-card">
                    <div class="blog-image">
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image">
                        <span class="blog-date">{{ $blog->created_at->format('M d, Y') }}</span>
                    </div>
                    <div class="blog-content">
                        <h3>{{ $blog->trans_title }}</h3>
                        <p>{{ Str::words(strip_tags($blog->trans_description), 15, '...') }}</p>
                        <a href="{{ route('front.blog', $blog->slug) }}" class="blog-btn">
                            {{ __('website.read_more') }} <i
                                class='bx bx-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}-arrow-alt'></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection
