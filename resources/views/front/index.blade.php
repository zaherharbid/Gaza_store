@extends('front.layout.master')
@section('title', 'Homepage | ' . env('APP_NAME'))
@section('content')
    @dump(app()->getLocale())
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

    <!-- New Arrivals Section -->
    <section class="new-arrivals">
        <h2>New Arrivals</h2>
        <div class="products-grid">
            <!-- Card Example -->
            <div class="product-card">
                <a href="{{ route('front.product', 1) }}"> <img src="{{ asset('assets/img/Rectangle 10.png') }}"
                        alt="Product" />
                    <div class="product-info">
                        <h3>Product Name</h3>
                        <p>Shirts</p>
                        <div class="rating">
                            <span class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <span>(365)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">120$</span>
                            <span class="old-price">150$</span>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <button class="fav-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </a>

            </div>
            <div class="product-card">
                <a href="{{ route('front.product', 1) }}">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="Product" />
                    <div class="product-info">
                        <h3>Product Name</h3>
                        <p>Shirts</p>
                        <div class="rating">
                            <span class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <span>(365)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">120$</span>
                            <span class="old-price">150$</span>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <button class="fav-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </a>

            </div>
            <div class="product-card">
                <a href="{{ route('front.product', 1) }}">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="Product" />
                    <div class="product-info">
                        <h3>Product Name</h3>
                        <p>Shirts</p>
                        <div class="rating">
                            <span class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <span>(365)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">120$</span>
                            <span class="old-price">150$</span>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <button class="fav-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </a>

            </div>
            <div class="product-card">
                <a href="{{ route('front.product', 1) }}">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="Product" />
                    <div class="product-info">
                        <h3>Product Name</h3>
                        <p>Shirts</p>
                        <div class="rating">
                            <span class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <span>(365)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">120$</span>
                            <span class="old-price">150$</span>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <button class="fav-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </a>

            </div>
            <div class="product-card">
                <a href="{{ route('front.product', 1) }}">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="Product" />
                    <div class="product-info">
                        <h3>Product Name</h3>
                        <p>Shirts</p>
                        <div class="rating">
                            <span class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <span>(365)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">120$</span>
                            <span class="old-price">150$</span>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <button class="fav-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </a>

            </div>
            <div class="product-card">
                <a href="{{ route('front.product', 1) }}">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="Product" />
                    <div class="product-info">
                        <h3>Product Name</h3>
                        <p>Shirts</p>
                        <div class="rating">
                            <span class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <span>(365)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">120$</span>
                            <span class="old-price">150$</span>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <button class="fav-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </a>

            </div>
            <div class="product-card">
                <a href="{{ route('front.product', 1) }}">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="Product" />
                    <div class="product-info">
                        <h3>Product Name</h3>
                        <p>Shirts</p>
                        <div class="rating">
                            <span class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <span>(365)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">120$</span>
                            <span class="old-price">150$</span>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <button class="fav-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
            </div>
            </a>


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

    <!-- Recent Products Carousel -->
    <section class="recent-products">
        <div class="section-header">
            <h2>Recent</h2>
            <a href="#" class="view-all">View All</a>
        </div>
        <div class="carousel-container" id="carousel">
            <!-- Repeat Card -->
            <div class="product-card">
                <a href=""{{ route('front.product', 1) }}"">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="Product" />
                    <div class="product-info">
                        <h3>Product Name</h3>
                        <p>Shirts</p>
                        <div class="rating">
                            <span class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <span>(365)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">120$</span>
                            <span class="old-price">150$</span>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <button class="fav-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </a>

            </div>
            <div class="product-card">
                <a href="{{ route('front.product', 1) }}">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="Product" />
                    <div class="product-info">
                        <h3>Product Name</h3>
                        <p>Shirts</p>
                        <div class="rating">
                            <span class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <span>(365)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">120$</span>
                            <span class="old-price">150$</span>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <button class="fav-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </a>

            </div>
            <div class="product-card">
                <a href="{{ route('front.product', 1) }}">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="Product" />
                    <div class="product-info">
                        <h3>Product Name</h3>
                        <p>Shirts</p>
                        <div class="rating">
                            <span class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <span>(365)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">120$</span>
                            <span class="old-price">150$</span>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <button class="fav-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </a>

            </div>
            <div class="product-card">
                <a href="{{ route('front.product', 1) }}">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="Product" />
                    <div class="product-info">
                        <h3>Product Name</h3>
                        <p>Shirts</p>
                        <div class="rating">
                            <span class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <span>(365)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">120$</span>
                            <span class="old-price">150$</span>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <button class="fav-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </a>

            </div>
            <div class="product-card">
                <a href="{{ route('front.product', 1) }}">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="Product" />
                    <div class="product-info">
                        <h3>Product Name</h3>
                        <p>Shirts</p>
                        <div class="rating">
                            <span class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <span>(365)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">120$</span>
                            <span class="old-price">150$</span>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <button class="fav-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </a>

            </div>
            <div class="product-card">
                <a href="{{ route('front.product', 1) }}">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="Product" />
                    <div class="product-info">
                        <h3>Product Name</h3>
                        <p>Shirts</p>
                        <div class="rating">
                            <span class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <span>(365)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">120$</span>
                            <span class="old-price">150$</span>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <button class="fav-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </a>

            </div>
            <div class="product-card">
                <a href="{{ route('front.product', 1) }}">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="Product" />
                    <div class="product-info">
                        <h3>Product Name</h3>
                        <p>Shirts</p>
                        <div class="rating">
                            <span class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <span>(365)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">120$</span>
                            <span class="old-price">150$</span>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <button class="fav-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </a>

            </div>
            <div class="product-card">
                <a href="{{ route('front.product', 1) }}">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="Product" />
                    <div class="product-info">
                        <h3>Product Name</h3>
                        <p>Shirts</p>
                        <div class="rating">
                            <span class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <span>(365)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">120$</span>
                            <span class="old-price">150$</span>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <button class="fav-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
            </div>
            </a>

        </div>
    </section>

    <section class="recent-products">
        <div class="section-header">
            <h2>Best Seller</h2>
            <a href="#" class="view-all">View All</a>
        </div>
        <div class="carousel-container" id="carousel">
            <!-- Repeat Card -->
            <div class="product-card">
                <a href="{{ route('front.product', 1) }}">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="Product" />
                    <div class="product-info">
                        <h3>Product Name</h3>
                        <p>Shirts</p>
                        <div class="rating">
                            <span class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <span>(365)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">120$</span>
                            <span class="old-price">150$</span>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <button class="fav-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </a>

            </div>
            <div class="product-card">
                <a href="{{ route('front.product', 1) }}">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="Product" />
                    <div class="product-info">
                        <h3>Product Name</h3>
                        <p>Shirts</p>
                        <div class="rating">
                            <span class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <span>(365)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">120$</span>
                            <span class="old-price">150$</span>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <button class="fav-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </a>

            </div>
            <div class="product-card">
                <a href="{{ route('front.product', 1) }}">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="Product" />
                    <div class="product-info">
                        <h3>Product Name</h3>
                        <p>Shirts</p>
                        <div class="rating">
                            <span class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <span>(365)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">120$</span>
                            <span class="old-price">150$</span>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <button class="fav-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </a>

            </div>
            <div class="product-card">
                <a href="{{ route('front.product', 1) }}">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="Product" />
                    <div class="product-info">
                        <h3>Product Name</h3>
                        <p>Shirts</p>
                        <div class="rating">
                            <span class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <span>(365)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">120$</span>
                            <span class="old-price">150$</span>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <button class="fav-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </a>

            </div>
            <div class="product-card">
                <a href="{{ route('front.product', 1) }}">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="Product" />
                    <div class="product-info">
                        <h3>Product Name</h3>
                        <p>Shirts</p>
                        <div class="rating">
                            <span class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <span>(365)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">120$</span>
                            <span class="old-price">150$</span>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <button class="fav-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </a>

            </div>
            <div class="product-card">
                <a href="{{ route('front.product', 1) }}">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="Product" />
                    <div class="product-info">
                        <h3>Product Name</h3>
                        <p>Shirts</p>
                        <div class="rating">
                            <span class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <span>(365)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">120$</span>
                            <span class="old-price">150$</span>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <button class="fav-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </a>

            </div>
            <div class="product-card">
                <a href="{{ route('front.product', 1) }}">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="Product" />
                    <div class="product-info">
                        <h3>Product Name</h3>
                        <p>Shirts</p>
                        <div class="rating">
                            <span class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <span>(365)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">120$</span>
                            <span class="old-price">150$</span>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <button class="fav-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </a>

            </div>
            <div class="product-card">
                <a href="{{ route('front.product', 1) }}">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="Product" />
                    <div class="product-info">
                        <h3>Product Name</h3>
                        <p>Shirts</p>
                        <div class="rating">
                            <span class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <span>(365)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">120$</span>
                            <span class="old-price">150$</span>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <button class="fav-btn">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-us">
        <div class="about-content">
            <div class="about-image">
                <img src="{{ asset('assets/img/aboutUs.png') }}" alt="About Image" />
            </div>
            <div class="about-text">
                <h2>About Us</h2>
                <p>Your ultimate destination for all things men’s clothing!</p>
                <p>
                    We are a specialized store that offers a variety of fashions that suit all age groups, from young
                    men to mature men.
                    We strive to meet the needs of every customer by providing modern and elegant designs that reflect
                    their unique taste.
                </p>
            </div>

        </div>

        <div class="about-heading">
            <div class="multi-border">
                <h3>Why <span>are we the best choice?</span></h3>
            </div>
        </div>

        <div class="features-grid">
            <div class="feature-box" style="box-shadow: 1px 1px 8px #640020;">
                <i class="fas fa-tshirt"></i>
                <h4>Diverse Products</h4>
                <p>Casual and formal wear to meet all your needs.</p>
            </div>
            <div class="feature-box" style="box-shadow: 1px 1px 8px #19853F;">
                <i class="fas fa-clipboard-check"></i>
                <h4>High Quality</h4>
                <p>We select high-quality materials for every clothing piece.</p>
            </div>
            <div class="feature-box" style="box-shadow: 1px 1px 8px #001A72;">
                <i class="fas fa-thumbs-up"></i>
                <h4>Honesty and Transparency</h4>
                <p>Products are as described, no surprises.</p>
            </div>
            <div class="feature-box" style="box-shadow: 1px 1px 8px #790E79;">
                <i class="fas fa-tags"></i>
                <h4>Competitive Prices</h4>
                <p>Affordable prices for every budget.</p>
            </div>
            <div class="feature-box" style="box-shadow: 1px 1px 8px #9FB60D;">
                <i class="fas fa-headphones-alt"></i>
                <h4>Customer Service</h4>
                <p>Our team is ready to help you choose wisely.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <h2>What Our Customers Say</h2>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <h4>Osama M. <span><i class="fas fa-star"></i> (4.5)</span></h4>
                <p>As a sommelier I was more than happy to discover Fivinun. I just send a message to my account manager
                    and 9/10 times he finds the bottle I need!</p>
            </div>
            <div class="testimonial-card">
                <h4>Ali SH. <span><i class="fas fa-star"></i> (4.7)</span></h4>
                <p>As a sommelier I was more than happy to discover Fivinun. I just send a message to my account manager
                    and 9/10 times he finds the bottle I need!</p>
            </div>
            <div class="testimonial-card">
                <h4>Ahmed F. <span><i class="fas fa-star"></i> (4.8)</span></h4>
                <p>As a sommelier I was more than happy to discover Fivinun. I just send a message to my account manager
                    and 9/10 times he finds the bottle I need!</p>
            </div>
        </div>
    </section>
@endsection
