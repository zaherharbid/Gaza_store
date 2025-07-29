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
                <img src="{{ asset('assets/img/Rectangle 2.png') }}" alt="Gaza Store" />
            </div>
            <ul class="icon-list">
                <li><a href="Search.html"><i class="fa-solid fa-search"></i></a></li>
                <li><a href="Favorites.html"><i class="fa-regular fa-heart"></i></a></li>
                <li><a href="Cart.html"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <li><a href="profile.html"><i class="fa-regular fa-user"></i></a></li>
            </ul>
            <div class="auth-buttons">
                <a href="Login.html"><button class="btn-outline">{{ __('website.nav.login') }}</button></a>
                <a href="SignUp.html"><button class="btn-fill">{{ __('website.nav.sign up') }}</button></a>
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
