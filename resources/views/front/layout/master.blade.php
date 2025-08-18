<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', env('APP_NAME'))</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Home.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/productPage.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    @if (app()->getLocale() == 'ar')
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap');


            body {
                font-family: "Tajawal", sans-serif;
                direction: rtl;
                text-align: right;

            }
        </style>
    @endif
    <style>
        .products {
            padding: 30px 20px;
            text-align: center;
        }

        .products .section-title {
            display: block;
            font-size: 14px;
            color: #27ae60;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .products h2.section-title {
            font-size: 24px;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .products p {
            font-size: 14px;
            color: #555;
            margin-bottom: 20px;
        }

        .products-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
        }

        .product-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 230px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            position: relative;
            text-align: left;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        .product-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            display: block;
            object-position: top;

        }

        .product-info {
            padding: 12px;
        }

        .product-title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 6px;
        }

        .product-title h3 {
            font-size: 16px;
            margin: 0;
            color: #222;
            font-weight: 600;
        }

        .fav-btn {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 1.2rem;
            color: #666;
            transition: color 0.2s ease, transform 0.2s ease;
        }

        .fav-btn:hover {
            color: red;
            transform: scale(1.2);
        }

        .fav-btn.liked {
            color: red;
        }

        .price {
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .current-price {
            font-size: 15px;
            font-weight: 700;
            color: #27ae60;
        }

        .old-price {
            font-size: 13px;
            color: #999;
            text-decoration: line-through;
        }

        .review {
            display: flex;
            align-items: center;
            font-size: 12px;
            color: #555;
            margin-bottom: 8px;
        }

        .review i {
            color: gold;
            margin-right: 4px;
        }

        .card-actions {
            display: flex;
            gap: 6px;
            margin-top: 6px;
        }

        .card-actions a {
            text-decoration: none;
            padding: 4px 8px;
            border-radius: 5px;
            font-weight: 500;
            font-size: 12px;
            display: inline-block;
            transition: background 0.2s ease;
        }

        .add-to-cart {
            width: 200px;
            height: 40px;
            background: #27ae60;
            color: #fff;
            text-align: center;
            align-content: center;
            font-size: 14px
        }

        .add-to-cart:hover {
            background: #219150;
        }

        .view-details {
            background: #f0f0f0;
            color: #333;
            width: 100px;
            height: 40px;
            text-align: center;
            align-content: center;
            font-size: 14px
        }

        .view-details:hover {
            background: #e0e0e0;
        }

        @media (max-width: 768px) {
            .product-card {
                width: 45%;
            }
        }

        @media (max-width: 480px) {
            .product-card {
                width: 100%;
            }
        }

        .product-image img {
            width: 400px;
            border-radius: 10px;
            height: 100%;
            object-fit: cover;
            display: block;
            object-position: top;
        }

        .social-share .social-icon i {
            font-size: 20px;
            color: #555;
            transition: transform 0.2s, color 0.2s;
        }

        .social-share .social-icon i:hover {
            color: #27ae60;
            transform: scale(1.2);
        }
    </style>


    @yield('css')
</head>

<body>
    <!-- Top Bar -->
    <div class="contact-bar">
        <span><i class="fa-solid fa-phone"></i> +1 (408) 555-0120</span>
        <span><i class="fa-solid fa-envelope"></i> ckcmt12@gmail.com</span>
        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            @if ($localeCode != app()->getLocale())
                <li>
                    <a rel="alternate" style="color: #fff" hreflang="{{ $localeCode }}"
                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        <img width="30" src="{{ asset('flags/' . $properties['flag']) }}" alt="">
                    </a>
                </li>
            @endif
        @endforeach
    </div>

    <header>
        <div class="nav-wrapper">
            <div class="logo">
                <a href="{{ route('front.index') }}">
                    <img src="{{ asset('assets/img/Rectangle 2.png') }}" alt="Gaza Store" />
                </a>
            </div>
            <ul class="icon-list">
                <li><a href="Search.html"><i class="fa-solid fa-search"></i></a></li>
                <li><a href="Favorites.html"><i class="fa-regular fa-heart"></i></a></li>
                <li><a href="Cart.html"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <li><a href="profile.html"><i class="fa-regular fa-user"></i></a></li>
            </ul>
            <div class="auth-buttons">
                @if (auth()->check())
                    <a onclick="event.preventDefault(); document.querySelector('#logout-form').submit()"
                        href="{{ route('logout') }}"><button
                            class="btn-outline">{{ __('website.nav.logout') }}</button></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf

                    </form>
                @else
                    <a href="{{ route('login') }}"><button
                            class="btn-outline">{{ __('website.nav.login') }}</button></a>
                @endif
                <a href="{{ route('register') }}"><button
                        class="btn-fill">{{ __('website.nav.sign up') }}</button></a>
            </div>
        </div>
    </header>

    @yield('content')


    <footer>
        <div class="footer-grid">
            <div>
                <img src="{{ asset('assets/img/Rectangle 11.png') }}" alt="Gaza Store"
                    style="height: 32px; margin-bottom: 14px" />
                <p>{{ __('website.footer.copyright') }}</p>
            </div>
            <div>
                <h5>{{ __('website.footer.followUs') }}</h5>
                <a class="footer-link" href="#">{{ __('website.footer.facebook') }}</a>
                <a class="footer-link" href="#">{{ __('website.footer.twitter') }}</a>
                <a class="footer-link" href="#">{{ __('website.footer.instagram') }}</a>
                <a class="footer-link" href="#">{{ __('website.footer.linkedin') }}</a>
            </div>
            <div>
                <h5>{{ __('website.footer.contactUs') }}</h5>
                <a class="footer-link" href="mailto:emailaddress@mail.com">{{ __('website.footer.email') }}</a>
            </div>
            <div>
                <h5>{{ __('website.footer.subscribe') }}</h5>
                <form class="newsletter" onsubmit="event.preventDefault();">
                    <input type="email" placeholder={{ __('website.footer.customerEmail') }} />
                    <button type="submit" style="background-color: #19853F;color: #fff;"><i
                            class="fa-solid fa-angle-right"></i></button>
                </form>
            </div>
        </div>
        <p class="copy-links"><a href="Terms&Conditions.html">{{ __('website.footer.terms&conditions') }}</a> | <a
                href="PrivacyPolicy.html">{{ __('website.footer.privacyPolicy') }}</a></p>
    </footer>



    <script src="{{ asset('assets/js/Home.js') }}" defer></script>
    @yield('js')

</body>

</html>
