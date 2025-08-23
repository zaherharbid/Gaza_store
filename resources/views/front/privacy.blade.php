@extends('front.layout.master')

@section('title', 'Terms & Conditions')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/Terms&Conditions.css') }}">
@endsection

@section('content')
    <nav class="nav-bar">
        <h3>Privacy Policy</h3>
    </nav>

    <main class="content">
        <h4>Privacy Policy</h4>
        <ul>
            <li>When you register on the site, you will be asked to provide personal information such as your name and email
                address. This information will be stored in our database.</li>
            <li>We are committed to protecting user information from unauthorized access, alteration, or disclosure. We
                encourage you to provide accurate information and to inform us of any incorrect or outdated details.</li>
            <li>We store your personal information on secure servers. By submitting your information, you consent to its
                storage on our servers. We make every effort to protect your data, but data transmission over the internet
                is not completely secure.</li>
            <li>The store reserves the right to change the shipping company without prior notice if shipping is free.</li>
            <li>Any information you provide will not be disclosed to any third party and will be used solely for customer
                service purposes. We guarantee its security, reliability, and confidentiality.</li>
        </ul>

    </main>

@endsection
