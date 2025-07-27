<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', env('APP_NAME'))</title>
    <link rel="stylesheet" href="{{ asset('assets/css/Home.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/productPage.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    @yield('css')
</head>

<body>
    <!-- Top Bar -->
    <div class="contact-bar">
        <span><i class="fa-solid fa-phone"></i> +1 (408) 555-0120</span>
        <span><i class="fa-solid fa-envelope"></i> ckcmt12@gmail.com</span>
        <span style="margin-left:auto"><i class="fa-solid fa-globe"></i> English ▾</span>
    </div>

    <header>
        <div class="nav-wrapper">
            <div class="logo">
                <img src="{{ asset('assets/img/Rectangle 2.png') }}" alt="Caza Store" />
            </div>
            <ul class="icon-list">
                <li><a href="Search.html"><i class="fa-solid fa-search"></i></a></li>
                <li><a href="Favorites.html"><i class="fa-regular fa-heart"></i></a></li>
                <li><a href="Cart.html"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <li><a href="profile.html"><i class="fa-regular fa-user"></i></a></li>
            </ul>
            <div class="auth-buttons">
                <a href="Login.html"><button class="btn-outline">Login</button></a>
                <a href="SignUp.html"><button class="btn-fill">Signup</button></a>
            </div>
        </div>
    </header>

    @yield('content')


    <footer>
        <div class="footer-grid">
            <div>
                <img src="{{ asset('assets/img/Rectangle 11.png') }}" alt="Caza Store"
                    style="height: 32px; margin-bottom: 14px" />
                <p>Copyright © 2025. osama. All rights reserved.</p>
            </div>
            <div>
                <h5>Follow us</h5>
                <a class="footer-link" href="#">Facebook</a>
                <a class="footer-link" href="#">Twitter</a>
                <a class="footer-link" href="#">Instagram</a>
                <a class="footer-link" href="#">Linkedin</a>
            </div>
            <div>
                <h5>Contact us</h5>
                <a class="footer-link" href="mailto:emailaddress@mail.com">emailaddress@mail.com</a>
            </div>
            <div>
                <h5>Subscribe to our Store</h5>
                <form class="newsletter" onsubmit="event.preventDefault();">
                    <input type="email" placeholder="Email address" />
                    <button type="submit" style="background-color: #19853F;color: #fff;"><i
                            class="fa-solid fa-angle-right"></i></button>
                </form>
            </div>
        </div>
        <p class="copy-links"><a href="Terms&Conditions.html">Terms & Conditions</a> | <a
                href="PrivacyPolicy.html">Privacy Policy</a></p>
    </footer>



    <script src="{{ asset('assets/js/Home.js') }}" defer></script>
    @yield('js')

</body>

</html>
