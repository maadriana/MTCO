@extends('layouts.app')
@section('title', 'Cases')

@section('content')

<!--====== CASES SECTION START ======-->
<section class="pt-100 pb-100 text-center gradient-bg">
    <div class="container">
        <h4 class="sub_title text-primary mb-2 font-size: 2.5rem; ">Case Studies</h4>
        <h2 class="title mb-5 font-size: 2.5rem;">Recent Business <br> Case Studies</h2>

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
<!--====== CASES SECTION END ======-->

@endsection
