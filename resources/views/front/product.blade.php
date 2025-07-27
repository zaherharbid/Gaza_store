@extends('front.layout.master')
@section('title', 'Homepage | ' . env('APP_NAME'))
@section('content')
    <!-- Product Section -->
    <main class="container">
        <section class="product">
            <div class="product-image">
                <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="Product Image">
            </div>
            <div class="product-info">
                <h1>Product Name number 1</h1>
                <p class="category">Category</p>
                <p class="price">$200 <span class="old-price">$280</span></p>

                <div class="options">
                    <div class="colors">
                        <label>Color:</label>
                        <button class="color-btn active" data-color="black">black</button>
                        <button class="color-btn" data-color="red">red</button>
                        <button class="color-btn" data-color="blue">blue</button>
                    </div>

                    <div class="sizes">
                        <label>Size:</label>
                        <button class="size-btn">S</button>
                        <button class="size-btn active">M</button>
                        <button class="size-btn">L</button>
                        <button class="size-btn">XL</button>
                        <button class="size-btn">XXL</button>
                        <button class="size-btn">XXXL</button>
                    </div>
                </div>

                <div class="description">
                    <h3>Description</h3>
                    <p>Product description product description product description product description Product description
                        product description product description product description Product description product description
                        product description product description.</p>
                </div>

                <div class="btn-div">
                    <button class="add-to-cart">Add to Cart</button>
                    <a href="#" style="color: black;"><i class="fa-regular fa-heart btn-icon"></i></a>
                </div>
            </div>
        </section>

        <!-- Rating and Review Section -->
        <section class="rating-ifo">
            <h2>Rating & Reviews</h2>
            <div class="rating-summary">
                <div class="score">
                    <div class="scor-text">
                        <span style="font-size: 150px;">4.5</span>
                        <span style="font-size: 40px;">/5</span>
                    </div>
                    <div class="scor-rate">
                        <div class="text">
                            <i class="fa-solid fa-star" style="color: rgb(255, 217, 0); font-size: 30px;"></i>
                            <span>5</span>
                            <div class="bac">
                                <div class="fill" style="  width: 95%;"></div>
                            </div>
                        </div>
                        <div class="text">
                            <i class="fa-solid fa-star" style="color: rgb(255, 217, 0); font-size: 30px;"></i>
                            <span>4</span>
                            <div class="bac">
                                <div class="fill" style="  width: 30%;"></div>
                            </div>
                        </div>
                        <div class="text">
                            <i class="fa-solid fa-star" style="color: rgb(255, 217, 0); font-size: 30px;"></i>
                            <span>3</span>
                            <div class="bac">
                                <div class="fill" style="  width: 20%;"></div>
                            </div>
                        </div>
                        <div class="text">
                            <i class="fa-solid fa-star" style="color: rgb(255, 217, 0); font-size: 30px;"></i>
                            <span>2</span>
                            <div class="bac">
                                <div class="fill" style="  width: 15%;"></div>
                            </div>
                        </div>
                        <div class="text">
                            <i class="fa-solid fa-star" style="color: rgb(255, 217, 0); font-size: 30px;"></i>
                            <span>1</span>
                            <div class="bac">
                                <div class="fill" style="  width: 10%;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rating">
                    <div class="rating-avatar">
                        <img src="{{ asset('assets/img/avatar.png') }}" alt="">
                        <span style="margin-left: 12px;">Alex Mohamed</span>
                    </div>
                    <div class="rate-star">
                        <div class="star">
                            <i class="fa-solid fa-star" style="color: rgb(255, 217, 0); font-size: 20px;"></i>
                            <i class="fa-solid fa-star" style="color: rgb(255, 217, 0); font-size: 20px;"></i>
                            <i class="fa-solid fa-star" style="color: rgb(255, 217, 0); font-size: 20px;"></i>
                            <i class="fa-solid fa-star" style="color: rgb(255, 217, 0); font-size: 20px;"></i>
                            <i class="fa-solid fa-star" style="color: rgb(255, 217, 0); font-size: 20px;"></i>
                        </div>
                        <span>13,Oct 2024</span>
                    </div>
                    <p>product discerption product discerption product discerption , product discerption product discerption
                        product discerption product discerption product </p>
                </div>

            </div>
        </section>


        <!-- Social Share -->
        <section class="social-share">
            <h3>Share with Social Media</h3>
            <div class="icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-facebook-messenger"></i>
                <i class="fab fa-x-twitter"></i>
                <i class="fab fa-whatsapp"></i>
                <i class="fab fa-snapchat"></i>
                <i class="fab fa-telegram"></i>
            </div>
        </section>

        <!-- You Might Also Like -->
        <section class="recommendations">
            <h2>You might also like</h2>
            <div class="products">
                <div class="item">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="shirt" />
                    <p>Product Name </p>
                    <p>Shirts</p>
                    <p>
                        <i class="fa-solid fa-star" style="color: rgb(255, 217, 0);"></i>
                        <i class="fa-solid fa-star" style="color: rgb(255, 217, 0);"></i>
                        <i class="fa-solid fa-star" style="color: rgb(255, 217, 0);"></i>
                        <i class="fa-solid fa-star" style="color: rgb(255, 217, 0);"></i>
                        <i class="fa-regular fa-star" style="color: rgb(255, 217, 0);"></i>
                        (365)
                    </p>
                    <p>$120 <del>$150</del></p>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="shirt" />
                    <p>Product Name </p>
                    <p>Shirts</p>
                    <p>
                        <i class="fa-solid fa-star" style="color: rgb(255, 217, 0);"></i>
                        <i class="fa-solid fa-star" style="color: rgb(255, 217, 0);"></i>
                        <i class="fa-solid fa-star" style="color: rgb(255, 217, 0);"></i>
                        <i class="fa-solid fa-star" style="color: rgb(255, 217, 0);"></i>
                        <i class="fa-regular fa-star" style="color: rgb(255, 217, 0);"></i>
                        (365)
                    </p>
                    <p>$120 <del>$150</del></p>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="shirt" />
                    <p>Product Name </p>
                    <p>Shirts</p>
                    <p>
                        <i class="fa-solid fa-star" style="color: rgb(255, 217, 0);"></i>
                        <i class="fa-solid fa-star" style="color: rgb(255, 217, 0);"></i>
                        <i class="fa-solid fa-star" style="color: rgb(255, 217, 0);"></i>
                        <i class="fa-regular fa-star" style="color: rgb(255, 217, 0);"></i>
                        <i class="fa-regular fa-star" style="color: rgb(255, 217, 0);"></i>
                        (365)
                    </p>
                    <p>$120 <del>$150</del></p>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/img/Rectangle 10.png') }}" alt="shirt" />
                    <p>Product Name </p>
                    <p>Shirts</p>
                    <p>
                        <i class="fa-solid fa-star" style="color: rgb(255, 217, 0);"></i>
                        <i class="fa-solid fa-star" style="color: rgb(255, 217, 0);"></i>
                        <i class="fa-solid fa-star" style="color: rgb(255, 217, 0);"></i>
                        <i class="fa-regular fa-star" style="color: rgb(255, 217, 0);"></i>
                        <i class="fa-regular fa-star" style="color: rgb(255, 217, 0);"></i>
                        (365)
                    </p>
                    <p>$120 <del>$150</del></p>
                </div>
            </div>
        </section>
    </main>
@endsection
