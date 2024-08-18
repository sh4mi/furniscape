@extends('web.layouts.app')
@section('title', 'About Us')
<style>
    .about-us {
        background-color: #f8f9fa;
    }
    .about-us h1, .about-us h2 {
        color: #333;
    }
    .about-us p {
        color: #555;
    }
    .about-us img {
        max-width: 100%;
        height: auto;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }
</style>
@section('content')
<section class="about-us py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-6">
                <h1 class="display-4">About Us</h1>
                <p class="lead">Welcome to Furniscape, where we offer the finest furniture to transform your home into a place of comfort and style.</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('web/assets/images/about-us.jpg') }}" alt="About Us" class="img-fluid rounded">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h2>Our Story</h2>
                <p>Furniscape was founded with a passion for quality furniture that blends aesthetics with functionality. Our journey began with a vision to create pieces that not only enhance the beauty of your living spaces but also provide unparalleled comfort and durability.</p>
                <p>Our dedicated team works tirelessly to source the best materials and employ skilled craftsmanship to bring you furniture that is both elegant and enduring. We believe that every piece should tell a story and become a cherished part of your home.</p>
            </div>
            <div class="col-lg-6">
                <h2>Our Mission</h2>
                <p>At Furniscape, our mission is to deliver exceptional furniture that meets the highest standards of quality and design. We strive to exceed your expectations with every product and provide outstanding customer service that makes your shopping experience memorable.</p>
                <p>We are committed to sustainability and ethical practices, ensuring that our products are not only beautiful but also responsibly sourced. Join us in our journey to create homes filled with elegance and comfort.</p>
            </div>
        </div>
    </div>
</section>
@endsection


