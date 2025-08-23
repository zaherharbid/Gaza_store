@extends('front.layout.master')

@section('title', 'Terms & Conditions')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/Terms&Conditions.css') }}">
@endsection

@section('content')
    <nav class="nav-bar">
        <h3>Terms & Conditions</h3>
    </nav>

    <main class="content">
        <p class="main-tex"><strong>Dear <span class="highlight">customer</span></strong>, please read the following <span
                class="highlight">terms and conditions</span> before completing your purchase. Completing the purchase
            constitutes acceptance of these <span class="highlight">terms and conditions</span>:</p>

        <h4>Product Display</h4>
        <ul>
            <li>Displaying products does not mean they fit the customer's needs. The customer must verify the
                suitability of the product using the information available on each product page.</li>
        </ul>

        <h4>Shipping and Delivery</h4>
        <ul>
            <li>The recipient's information and delivery address must be entered accurately. Any error may result in a
                delay or non-delivery of the shipment.</li>
            <li>The expected delivery time is an estimate and may be delayed for reasons beyond the store's control.
            </li>
            <li>The store or the shipping company are not responsible for any delays due to the customer's absence or
                failure to respond to the delivery representative.</li>
            <li>The store reserves the right to change the shipping company without prior notice if shipping is free.
            </li>
            <li>If a damaged shipment arrives, the shipping company must be notified before receiving it, and then the
                store must be notified.</li>
        </ul>

        <h4>Returns and Exchanges</h4>
        <ul>
            <li>All merchandise (except underwear) may be returned within 7 days of receipt, provided it is unused and
                in its original condition.</li>
            <li>Original shipping fees are non-refundable.</li>
            <li>The order invoice must be attached to complete the return process.</li>
        </ul>

        <h4>Order Cancellation/Modification/Non-Receipt Fees</h4>
        <ul>
            <li>The cancellation or modification request must be sent via email.</li>
            <li>If the order is delivered to the shipping company before cancellation, or if the customer does not
                receive the order, the shipping fees will be deducted from the refund amount.</li>
        </ul>

        <p class="note"><strong>Note:</strong> All packages include a store invoice; failure to include one means no
            return is possible.</p>
    </main>
@endsection
