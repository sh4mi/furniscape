@extends('web.layouts.app')
@section('title', 'Careers')

@section('content')
<section class="about-us py-5">
    <div class="container my-5">
        <div class="text-center mb-4">
            <h1 class="display-4">Join Our Team</h1>
            <p class="lead">We're always looking for talented individuals to help us grow.</p>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <img src="{{ asset('web/assets/images/join-our-team.jpg') }}" alt="Join Our Team" class="img-fluid rounded shadow-sm">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <p class="mb-0">
                    At our company, we believe in nurturing talent and fostering growth. If you're passionate about furniture design, 
                    customer service, or business development, we'd love to hear from you. Explore our current openings and find the perfect fit for your skills.
                </p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('web/assets/images/design-team.jpg') }}" class="card-img-top" alt="Design Team">
                    <div class="card-body">
                        <h5 class="card-title">Design Team</h5>
                        <p class="card-text">Join our creative team and help us design the future of furniture.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('web/assets/images/marketing-team.jpg') }}" class="card-img-top" alt="Marketing Team">
                    <div class="card-body">
                        <h5 class="card-title">Marketing & Sales</h5>
                        <p class="card-text">Help us spread the word and connect with our customers.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('web/assets/images/engineering-team.jpg') }}" class="card-img-top" alt="Engineering Team">
                    <div class="card-body">
                        <h5 class="card-title">Engineering & Development</h5>
                        <p class="card-text">Join our tech team and build the tools that drive our business.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <h2 class="mb-4">Open Positions</h2>
            <p>We are currently looking for:</p>
            <ul class="list-unstyled">
                <li>Product Designer</li>
                <li>Customer Service Representative</li>
                <li>Sales Associate</li>
                <li>Web Developer</li>
            </ul>
            <a href="mailto:careers@furniturestore.com" class="btn btn-dark mt-3">Apply Now</a>
        </div>
    </div>
</section>
@endsection
