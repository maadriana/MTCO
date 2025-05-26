@extends('layouts.app')

@section('content')
    <section class="team-section pt-5 pb-5 gradient-bottom-bg text-center" style="padding-top: 6rem !important;">
        <div class="container">
            <h6 class="text-primary mb-2" style="font-size: 1.25rem;">Team</h6>
            <h2 class="fw-bold mb-5" style="font-size: 2.5rem;">Meet Our<br>Committed Team Members</h2>

            <div class="row justify-content-center">
                @php
                    $teamMembers = [
                        [
                            'name' => 'Robert John',
                            'role' => 'Co-Founder and CEO',
                            'image' => 'assets/images/slider-1.jpg',
                            'social' => ['facebook' => '#', 'twitter' => '#', 'instagram' => '#', 'linkedin' => '#']
                        ],
                        [
                            'name' => 'Sophia Smiarthds',
                            'role' => 'Financial Expert',
                            'image' => 'assets/images/slider-1.jpg',
                            'social' => ['facebook' => '#', 'twitter' => '#', 'instagram' => '#', 'linkedin' => '#']
                        ],
                        [
                            'name' => 'John Doe',
                            'role' => 'Investment Expert',
                            'image' => 'assets/images/slider-1.jpg',
                            'social' => ['facebook' => '#', 'twitter' => '#', 'instagram' => '#', 'linkedin' => '#']
                        ],
                        [
                            'name' => 'Chris Dave',
                            'role' => 'Business Advisor',
                            'image' => 'assets/images/slider-1.jpg',
                            'social' => ['facebook' => '#', 'twitter' => '#', 'instagram' => '#', 'linkedin' => '#']
                        ],
                    ];
                @endphp

                @foreach ($teamMembers as $member)
                    <div class="col-lg-3 col-md-6 mb-4">
                    <div class="team-card position-relative overflow-hidden rounded shadow-sm">
                        <img src="{{ asset($member['image']) }}" class="img-fluid team-image" alt="{{ $member['name'] }}" style="width: 90%; height: 320px; object-fit: cover;">
                        <div class="team-social position-absolute d-flex justify-content-center align-items-center w-100" style="gap: 1.5rem;">
                        <a href="{{ $member['social']['facebook'] }}" class="mx-2"><i class="lni lni-facebook-filled"></i></a>
                        <a href="{{ $member['social']['twitter'] }}" class="mx-2"><i class="lni lni-twitter-original"></i></a>
                        <a href="{{ $member['social']['instagram'] }}" class="mx-2"><i class="lni lni-instagram-original"></i></a>
                        <a href="{{ $member['social']['linkedin'] }}" class="mx-2"><i class="lni lni-linkedin-original"></i></a>
                    </div>
                </div>
                        <h5 class="mt-3 fw-bold">{{ $member['name'] }}</h5>
                        <p class="text-muted">{{ $member['role'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
