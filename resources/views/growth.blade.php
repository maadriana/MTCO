@extends('layouts.app')
@section('title', 'Growth')

@section('content')

<section class="growth-section position-relative" style="padding: 120px 0 80px;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column: Text -->
            <div class="col-md-6 mb-4 mb-md-0 text-md-left text-center">
                <h6 class="text-primary mb-2" style="font-size: 1.7rem;">Grow Your Business</h6>
                <h2 class="fw-bold" style="font-size: 2.5rem;">Committed to Grow Your Business Like Never Before</h2>
                <p class="mb-4" style="font-size: 1.2rem;">
                    Lorem ipsum dolor sit amet, consectetur sadipscing elitr, sed diam nonumy eirmod tempor
                    invidunt ut labore et dolore magna aliquyam erat, seawd Stet clita kasd gubergren, no sea takimata
                    sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur.
                </p>
                <h5 class="fw-bold">Real-Time Analytics</h5>
                <p class="mb-4" style="font-size: 1.2rem;">
                    Lorem ipsum dolor sit amet, consectetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                    ut labore et dolore magna aliquyam erat, seawd Stet clita kasd gubergren.
                </p>
            </div>

            <!-- Right Column: Chart Image -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('assets/images/chart.png') }}" alt="Growth Chart" class="img-fluid"
                     style="max-width: 100%; height: auto;">
            </div>
        </div>
    </div>
</section>

@endsection

