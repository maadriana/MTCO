@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!--====== HERO SECTION START ======-->
<section id="home" class="header_slider">
    <div class="container-fluid">
        <div class="slider-active">
    <!-- Slide 1 -->
    <div class="single_slider bg_cover d-flex align-items-center"
         style="background-image: url('{{ asset('assets/images/slider-1.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="slider_content">
                        <h2 class="slider_title" data-animation="fadeInUp" data-delay="0.2s">We Help Grow Your Business</h2>
                        <p data-animation="fadeInUp" data-delay="0.6s">Smart strategies for smart entrepreneurs.</p>
                        <a class="main-btn" href="#" data-animation="fadeInUp" data-delay="1s">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slide 2 -->
    <div class="single_slider bg_cover d-flex align-items-center"
         style="background-image: url('{{ asset('assets/images/slider-1.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="slider_content">
                        <h2 class="slider_title" data-animation="fadeInUp" data-delay="0.2s">Secure Your Financial Future</h2>
                        <p data-animation="fadeInUp" data-delay="0.6s">Get expert investment advice from pros.</p>
                        <a class="main-btn" href="#" data-animation="fadeInUp" data-delay="1s">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slide 3 -->
    <div class="single_slider bg_cover d-flex align-items-center"
         style="background-image: url('{{ asset('assets/images/slider-1.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="slider_content">
                        <h2 class="slider_title" data-animation="fadeInUp" data-delay="0.2s">Your Success Is Our Goal</h2>
                        <p data-animation="fadeInUp" data-delay="0.6s">Trusted by 36,000+ businesses worldwide.</p>
                        <a class="main-btn" href="#" data-animation="fadeInUp" data-delay="1s">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</section>
<!--====== HERO SECTION ENDS ======-->

<!--====== BRAND AREA ======-->
<section class="brand_area pt-30 pb-50">
    <div class="container">
        <div class="brand_single d-flex flex-wrap justify-content-center justify-content-md-between">
            @for ($i = 1; $i <= 5; $i++)
                <div class="single_brand">
                    <img src="{{ asset('assets/images/brand-' . $i . '.png') }}" alt="brand">
                </div>
            @endfor
        </div>
    </div>
</section>

<!--====== FEATURES AREA ======-->
<section id="why" class="features_area pt-100 pb-100 blue-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section_title text-center pb-10">
                    <h4 class="sub_title">Why Choose Us?</h4>
                    <h3 class="title">We Provide Professional Financial Services For Business</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @php
                $features = [
                    ['icon' => 'certificate', 'title' => 'Certified'],
                    ['icon' => 'rocket', 'title' => 'Fast'],
                    ['icon' => 'briefcase', 'title' => 'Experienced'],
                    ['icon' => 'headphone-alt', 'title' => 'Dedicated'],
                ];
            @endphp

            @foreach ($features as $index => $feature)
            <div class="col-lg-3 col-sm-6">
                <div class="single_features text-center mt-25 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="{{ ($index + 1) * 0.3 }}s">
                    <div class="features_icon">
                        <i class="lni lni-{{ $feature['icon'] }}"></i>
                    </div>
                    <div class="features_content">
                        <h4 class="features_title"><a href="#">{{ $feature['title'] }}</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed.</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

    <section id="about" class="about_area pt-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="about_image mt-50">
                        <img src="assets/images/about.jpg" alt="about image">
                        <div class="experiance d-flex justify-content-center align-items-center text-center wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.2s">
                            <div class="experiance_wrapper text-center">
                                <span>25</span>
                                <p>Years of Experiance</p>
                            </div>
                        </div>
                        <div class="about_shape">
                            <img src="assets/images/shape-1.svg" alt="shape">
                        </div> <!-- about shape -->
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-5">
                    <div class="about_content mt-45">
                        <div class="section_title">
                            <h4 class="sub_title">About Us</h4>
                            <h3 class="title">Financio is Trusted by 36,817+ Businesses Worldwide.</h3>
                        </div> <!-- section title -->
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, seawd Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt .</p>

                        <div class="about_skills pt-15">
                            <div class="skill_item mt-20">
                                <div class="skill_header">
                                    <h6 class="skill_title">Finance</h6>
                                    <div class="skill_percentage">
                                        <p><span class="counter">85</span>%</p>
                                    </div>
                                </div>
                                <div class="skill_bar">
                                    <div class="bar_inner">
                                        <div class="bar progress_line" data-width="85"></div>
                                    </div>
                                </div>
                            </div> <!-- skill item -->
                            <div class="skill_item mt-20">
                                <div class="skill_header">
                                    <h6 class="skill_title">TAX</h6>
                                    <div class="skill_percentage">
                                        <p><span class="counter">75</span>%</p>
                                    </div>
                                </div>
                                <div class="skill_bar">
                                    <div class="bar_inner">
                                        <div class="bar progress_line" data-width="75"></div>
                                    </div>
                                </div>
                            </div> <!-- skill item -->
                            <div class="skill_item mt-20">
                                <div class="skill_header">
                                    <h6 class="skill_title">Investment</h6>
                                    <div class="skill_percentage">
                                        <p><span class="counter">90</span>%</p>
                                    </div>
                                </div>
                                <div class="skill_bar">
                                    <div class="bar_inner">
                                        <div class="bar progress_line" data-width="90"></div>
                                    </div>
                                </div>
                            </div> <!-- skill item -->
                            <div class="skill_item mt-20">
                                <div class="skill_header">
                                    <h6 class="skill_title">Growth</h6>
                                    <div class="skill_percentage">
                                        <p><span class="counter">65</span>%</p>
                                    </div>
                                </div>
                                <div class="skill_bar">
                                    <div class="bar_inner">
                                        <div class="bar progress_line" data-width="65"></div>
                                    </div>
                                </div>
                            </div> <!-- skill item -->
                        </div> <!-- about skill -->
                    </div>  <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <section id="services" class="services_area pt-95">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-15">
                        <h4 class="sub_title">Services</h4>
                        <h3 class="title">We Offer Best Financial Consultancy Services in Affordable Cost</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="services_icon">
                            <i class="lni lni-user"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="services_title"><a href="#">Business Advising</a></h4>
                            <p>Lorem ipsum dolor aconsetet dorem ipsum tempor inviduntsadipscing elitr, sed diamn numy eirmod tempor invidunt</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="services_icon">
                            <i class="lni lni-write"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="services_title"><a href="#">Financial Planning</a></h4>
                            <p>Lorem ipsum dolor aconsetet dorem ipsum tempor inviduntsadipscing elitr, sed diamn numy eirmod tempor invidunt</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.8s">
                        <div class="services_icon">
                            <i class="lni lni-coin"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="services_title"><a href="#">Savings & Investments</a></h4>
                            <p>Lorem ipsum dolor aconsetet dorem ipsum tempor inviduntsadipscing elitr, sed diamn numy eirmod tempor invidunt</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="services_icon">
                            <i class="lni lni-invest-monitor"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="services_title"><a href="#">TAX Consultancy</a></h4>
                            <p>Lorem ipsum dolor aconsetet dorem ipsum tempor inviduntsadipscing elitr, sed diamn numy eirmod tempor invidunt</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="services_icon">
                            <i class="lni lni-investment"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="services_title"><a href="#">Risk Management</a></h4>
                            <p>Lorem ipsum dolor aconsetet dorem ipsum tempor inviduntsadipscing elitr, sed diamn numy eirmod tempor invidunt</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services text-center mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.8s">
                        <div class="services_icon">
                            <i class="lni lni-graph"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="services_title"><a href="#">Trade & Stock</a></h4>
                            <p>Lorem ipsum dolor aconsetet dorem ipsum tempor inviduntsadipscing elitr, sed diamn numy eirmod tempor invidunt</p>
                        </div>
                    </div> <!-- single services -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <section class="pt-100 pb-100 text-center gradient-bg">
    <div class="container">
        <h4 class="sub_title text-primary mb-2">Case Studies</h4>
        <h2 class="title mb-5">Recent Business <br> Case Studies</h2>

        <div class="row justify-content-center">
            @php
                $cases = [
                    [
                        'title' => 'New Corporate Responsibility Metrics',
                        'image' => 'assets/images/slider-1.jpg',
                        'description' => 'Learn how forward-thinking organizations reshape responsibility with strategic insights.'
                    ],
                    [
                        'title' => 'Searching for a Search Fund Structure',
                        'image' => 'assets/images/slider-1.jpg',
                        'description' => 'A deep dive into emerging funding strategies for long-term business acquisition.'
                    ],
                    [
                        'title' => 'Shake Shack IPO',
                        'image' => 'assets/images/slider-1.jpg',
                        'description' => 'Behind the scenes of one of the most talked-about IPOs in recent years.'
                    ],
                ];
            @endphp

            @foreach ($cases as $case)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="single_case shadow-sm" style="position: relative; overflow: hidden; border-radius: 12px;">
                        <div class="case-image" style="
                            background-image: url('{{ asset($case['image']) }}');
                            height: 460px;
                            background-size: cover;
                            background-position: center;
                            border-radius: 12px;
                            position: relative;">
                            <div class="case-content">
                                <h5 class="case-title">{{ $case['title'] }}</h5>
                                <p class="mb-3 case-desc">{{ $case['description'] }}</p>
                                <a href="#" class="read-more-link">Read More →</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

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
