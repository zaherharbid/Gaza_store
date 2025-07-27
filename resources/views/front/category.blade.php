@extends('front.layout.master')
@section('title', 'Homepage | ' . env('APP_NAME'))

@section('content')

    <h1 class="hero-title">Shirts <span>Category</span></h1>
    <section class="products" id="productGrid">
        <div class="card" data-index="0">
            <img src="{{ asset('assets/img/RESET PASSWORD.png') }}" alt="Classic shirts">
            <div class="card-body">
                <h3 class="card-title">Classic shirts</h3>
                <p class="card-category">Shirts</p>
                <div class="rating">
                    ★★★★★ <span style="color:var(--muted); margin-left:4px">(365)</span>
                </div>
                <div class="price">120$ <span class="old-price">150$</span></div>
                <div class="action-row">
                    <button class="btn-cart">Add To Cart</button>
                    <i class="fa-regular fa-heart fav"></i>
                </div>
            </div>
        </div>
        <div class="card" data-index="1">
            <img src="https://images.unsplash.com/photo-1556905055-8f358a7a47b2?auto=format&amp;fit=crop&amp;w=400&amp;q=80"
                alt="Cotton shirts">
            <div class="card-body">
                <h3 class="card-title">Cotton shirts</h3>
                <p class="card-category">Shirts</p>
                <div class="rating">
                    ★★★★★ <span style="color:var(--muted); margin-left:4px">(365)</span>
                </div>
                <div class="price">120$ <span class="old-price">150$</span></div>
                <div class="action-row">
                    <button class="btn-cart">Add To Cart</button>
                    <i class="fa-regular fa-heart fav"></i>
                </div>
            </div>
        </div>
        <div class="card" data-index="2">
            <img src="https://images.unsplash.com/photo-1526948128573-703ee1aeb6fa?auto=format&amp;fit=crop&amp;w=400&amp;q=80"
                alt="Athletic Shirts">
            <div class="card-body">
                <h3 class="card-title">Athletic Shirts</h3>
                <p class="card-category">Shirts</p>
                <div class="rating">
                    ★★★★★ <span style="color:var(--muted); margin-left:4px">(365)</span>
                </div>
                <div class="price">120$ <span class="old-price">150$</span></div>
                <div class="action-row">
                    <button class="btn-cart">Add To Cart</button>
                    <i class="fa-regular fa-heart fav"></i>
                </div>
            </div>
        </div>
        <div class="card" data-index="3">
            <img src="https://images.unsplash.com/photo-1557180295-76eee20ae8aa?auto=format&amp;fit=crop&amp;w=400&amp;q=80"
                alt="Polo shirts">
            <div class="card-body">
                <h3 class="card-title">Polo shirts</h3>
                <p class="card-category">Shirts</p>
                <div class="rating">
                    ★★★★★ <span style="color:var(--muted); margin-left:4px">(365)</span>
                </div>
                <div class="price">120$ <span class="old-price">150$</span></div>
                <div class="action-row">
                    <button class="btn-cart">Add To Cart</button>
                    <i class="fa-regular fa-heart fav"></i>
                </div>
            </div>
        </div>
        <div class="card" data-index="4">
            <img src="https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?auto=format&amp;fit=crop&amp;w=400&amp;q=80"
                alt="Dress Shirts">
            <div class="card-body">
                <h3 class="card-title">Dress Shirts</h3>
                <p class="card-category">Shirts</p>
                <div class="rating">
                    ★★★★★ <span style="color:var(--muted); margin-left:4px">(365)</span>
                </div>
                <div class="price">120$ <span class="old-price">150$</span></div>
                <div class="action-row">
                    <button class="btn-cart">Add To Cart</button>
                    <i class="fa-regular fa-heart fav"></i>
                </div>
            </div>
        </div>
    </section>

    <section class="categories-wrapper">
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
    </section>

@endsection
