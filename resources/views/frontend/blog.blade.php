@extends('frontend.layouts.app')

@section('meta_title',$blog->meta_title)
@section('meta_description',$blog->meta_description)

@section('styles')
@endsection

@section('content')
<section class="case_studies-inner-banner" style="background-image: url({{$blog->banner}});">
    <div class="container">
        @php
            $align = '';
            if($blog->banner_alignment == 'right'){
                $align = 'ml-auto';
            }
        @endphp
        <div class="case_studies-inner-banner-wrap {{ $align }}">
            <div class="case_studies-inner-cat-title"><span>{{$blog->category->name}}</span> | <span>{{ $blog->subCategory->name }}</span></div>
            <h1 class="case_studies-inner-title">{{ $blog->title }}</h1>
            <h1 class="case_studies-inner-title">{{ $blog->short_des }}</h1>
            
            <div class="case_studies-inner-meta-title">
                {{-- print --}}
                <a href="javascript:void(0)" class="print_icon" onclick="window.print()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:white;transform: ;msFilter:;"><path d="M19 7h-1V2H6v5H5c-1.654 0-3 1.346-3 3v7c0 1.103.897 2 2 2h2v3h12v-3h2c1.103 0 2-.897 2-2v-7c0-1.654-1.346-3-3-3zM8 4h8v3H8V4zm8 16H8v-4h8v4zm4-3h-2v-3H6v3H4v-7c0-.551.449-1 1-1h14c.552 0 1 .449 1 1v7z"></path><path d="M14 10h4v2h-4z"></path></svg>
                </a>
                <a href="javascript:void(0)" class="copy_link" data-url="{{ route('blog.view',$blog->slug) }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #fff;"><path d="M5.5 15a3.51 3.51 0 0 0 2.36-.93l6.26 3.58a3.06 3.06 0 0 0-.12.85 3.53 3.53 0 1 0 1.14-2.57l-6.26-3.58a2.74 2.74 0 0 0 .12-.76l6.15-3.52A3.49 3.49 0 1 0 14 5.5a3.35 3.35 0 0 0 .12.85L8.43 9.6A3.5 3.5 0 1 0 5.5 15zm12 2a1.5 1.5 0 1 1-1.5 1.5 1.5 1.5 0 0 1 1.5-1.5zm0-13A1.5 1.5 0 1 1 16 5.5 1.5 1.5 0 0 1 17.5 4zm-12 6A1.5 1.5 0 1 1 4 11.5 1.5 1.5 0 0 1 5.5 10z"></path></svg></a>
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #fff;"><path d="M18 2H6c-1.103 0-2 .897-2 2v18l8-4.572L20 22V4c0-1.103-.897-2-2-2zm0 16.553-6-3.428-6 3.428V4h12v14.553z"></path></svg></a>
            </div>
        </div>
    </div>
</section>

<section class="case_studies-inner-body casestudies">
    <div class="inner-section">
        <div class="container">
            <div class="summery">
                <ul>
                    <li>
                        <div class="title">Industry</div>
                        <div class="desc">
                            <ul>
                                <li>Real Estate</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="title">Location</div>
                        <div class="desc">
                            <ul>
                                <li>India</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="title">Solutions</div>
                        <div class="desc">
                            <ul>
                                <li><a href="../web-engage/">Web Engage <img src="https://dwao.in/images/know-more-cta-arrow.png"></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="title">Results</div>
                        <div class="desc">
                            <ul>
                                <li>90% Increase in deliverability rate for Android push</li>
                                <li>17% Increase in conversions from new journeys</li>
                                <li>200+ Behavioural campaign executed </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="inner-section gray">
        <div class="container">
            <div class="grid">
                <div class="head">Background</div>
                <div class="dual-col">
                    <div class="left">Lodha Group is an Indian multinational real estate company headquartered in Mumbai,
                        India.</div>
                    <div class="right">
                        <p>At Lodha, our passion is to create landmarks that meet global standards, epitomise the values of
                            our family, and are built on a legacy of trust spanning four decades. We are guided by our
                            vision of ‘Building a Better Life’ and believe that homes transform lives. A home is a
                            springboard for the dreams and aspirations, for living a healthier and fulfilled life.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner">
        <img src="https://dwao.in/images/lodha.jpg">
    </div>
    <div class="inner-section gray">
        <div class="container">
            <div class="grid">
                <div class="head">Objective</div>
                <div class="dual-col">
                    <div class="left">Lodha Group wanted to increased their business KPIs.</div>
                    <div class="right">
                        <p>IP Reputation Building</p>
                        <p> Conversions of Leads to Opportunities</p>
                        <p>Daily Ad hoc Campaigns Set Up</p>
                        <p>Custom Dashboards &nbsp; Reports Set up</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="inner-section gray">
        <div class="container">
            <div class="grid">
                <div class="head">Solution</div>
                <div class="dual-col">
                    <div class="left">DWAO helped lodha Group to convert Conversions of Leads to Opportunities</div>
                    <div class="right">
                        <p>IP Reputation Building: We have increased the IP &nbsp; domain reputation of all 3 sub-domains of
                            Lodha Group from Low to high in the first 2 months of engagement and maintained it all time high
                            till now. Earlier they were getting 4-5% open rate for promotional communications from these sub
                            domains but now we are getting more that 14% open rate for promotional campaigns.
                        </p>
                        <p>Lead to Opportunity Conversion: We have created a lead scoring model on their automation
                            toolbased on the user interactions with communications and behaviour recorded on the website.
                            Based on this we have identified the Most qualified leads and got them prioritized through
                            different channels. This way we have converted 22% leads to Opportunities.</p>
                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="dual-col">
                    <div class="left">Setup Remarketing campaigns.</div>
                    <div class="right">
                        <p>We have done integration with theiraudience manager to share the segment from automation tool to
                            audience manager. We have configured various remarketing campaign on the intelligent segments we
                            had shared from the marketing automation tool, there by reducing the cost of these campaigns by
                            excluding the users who are already engaging with other mode of communications.</p>
                    </div>
                </div>
                <div class="grid">
                    <div class="dual-col">
                        <div class="left">We did the setup of Customer Life Cycle Journey Campaigns</div>
                        <div class="right">
                            <p>We have set various Automated Cross Channel Campaigns for Lodha Group:
                            </p>
                            <ul>
                                <li>Lead Scoring Model</li>
                                <li>Lead Engagement Journey.</li>
                                <li>Opportunity to Site Visit.</li>
                                <li>Visit done Booking not done.</li>
                                <li>3D Project Walkthrough Journey (After Covid Alternative to Site Visit).</li>
                            </ul>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="inner-section gray">
            <div class="container">
                <div class="grid">
                    <div class="banner-text">
                        <div class="thumb">
                            <img src="https://dwao.in/images/performence-thumb.jpg">
                        </div>
                        <div class="text">
                            DWAO worked with Lodha Group from last 2 years as a managed services project and create a lead
                            scoring model on their automation toolbased on the user interactions with communications and
                            behaviour recorded on the website
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="head">Result</div>
                    <div class="dual-col">
                        <div class="left">We didn’t just stop there.</div>
                        <div class="right">
                            <p>Strategic use case discovery</p>
                            <p>Deliverability audit and improvements.</p>
                            <p>Audit of existing set up and suggested missing events.</p>
                            <p>Implementation of new journeys.</p>
                            <p>Behavioral campaigns set up.</p>
                            <p>Campaign performance monitoring.</p>
                        </div>
                    </div>
                </div>

                <div class="features">
                    <ul>
                        <li>
                            <div class="title">90%</div>
                            <div class="desc">Increase in deliverability rate for Android push</div>
                        </li>
                        <li>
                            <div class="title">17%</div>
                            <div class="desc">Increase in conversions from new journeys</div>
                        </li>
                        <li>
                            <div class="title">200+</div>
                            <div class="desc">Journeys Implemented on the automation tool</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="inner-section gray">
            <div class="container">

                <div class="learn-more">
                    <h3>Related case studies</h3>
                    <div id="slider-wrapper" class="case-studies-slider-inner slick-initialized slick-slider">
                        <div class="slick-list draggable" style="padding: 0px;">
                            <div class="slick-track">
                                <div class="slide slick-slide slick-current slick-center" data-slick-index="0"
                                    aria-hidden="true" tabindex="0" style="width: 374.4px;"> <img
                                        src="https://dwao.in/images/featured-thumb-reliance.png" alt="Reliance">
                                    <div class="desc">
                                        <div class="bookmark"><a href="reliance-mutual-fund-case-study.html"
                                                tabindex="-1"></a></div>
                                        <h4>Case Study | Digital Analytics</h4>
                                        <h3>How DWAO helped Reliance Mutual Fund increase their data accuracy beyond 95%
                                        </h3>
                                        <p>DWAO helped Reliance Mutual Fund in setting up accurate measurement platform to
                                            understand customer behavior and execution of optimization roadmap across their
                                            digital properties.</p>
                                        <div class="cta"><a href="reliance-mutual-fund-case-study.html" tabindex="-1">
                                                <svg width="32" height="32" viewBox="0 0 32 32"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g fill="none" fill-rule="evenodd">
                                                        <circle fill="#4A69BB" cx="16" cy="16" r="16"></circle>
                                                        <g stroke="#FFF" stroke-width="2">
                                                            <path d="m17.037 22.468 6.971-6.488-6.971-6.48M24.008 15.98H8">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a></div>
                                    </div>
                                </div>
                                <div class="slide slick-slide" data-slick-index="1" aria-hidden="true" tabindex="0"
                                    style="width: 374.4px;"><img src="https://dwao.in/images/featured-thumb-airtel.jpg" alt="Airtel">
                                    <div class="desc">
                                        <div class="bookmark"><a href="airtel-case-study.html" tabindex="-1"></a></div>
                                        <h4>Case study | Digital Analysis</h4>
                                        <h3>How Airtel optimized their customer acquisition with DWAO</h3>
                                        <p>DWAO helped Airtel with higher conversion from onlinecustomer acquisition flow,
                                            migrate loyal users to mobile app and prevent affiliatefraud on prepaid recharge
                                            campaigns.</p>
                                        <div class="cta"><a href="airtel-case-study.html" tabindex="-1">
                                                <svg width="32" height="32" viewBox="0 0 32 32"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g fill="none" fill-rule="evenodd">
                                                        <circle fill="#4A69BB" cx="16" cy="16" r="16"></circle>
                                                        <g stroke="#FFF" stroke-width="2">
                                                            <path d="m17.037 22.468 6.971-6.488-6.971-6.48M24.008 15.98H8">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a></div>
                                    </div>
                                </div>
                                <div class="slide slick-slide slick-center" data-slick-index="2" aria-hidden="true"
                                    tabindex="0" style="width: 374.4px;"><img src="https://dwao.in/images/icicipru.png" alt="ICICIPRU">
                                    <div class="desc">
                                        <div class="bookmark"><a href="icici-prulife-case-study.html" tabindex="-1"></a>
                                        </div>
                                        <h4>Case study | Digital Analysis</h4>
                                        <h3>How ICICI Pru Life Improved conversion by 3X with DWAO</h3>
                                        <p>DWAO helped ICIC Pru Life achieve real-time personalizationand improve conversion
                                            rates for existing users.</p>
                                        <div class="cta"><a href="icici-prulife-case-study.html" tabindex="-1">
                                                <svg width="32" height="32" viewBox="0 0 32 32"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g fill="none" fill-rule="evenodd">
                                                        <circle fill="#4A69BB" cx="16" cy="16" r="16"></circle>
                                                        <g stroke="#FFF" stroke-width="2">
                                                            <path d="m17.037 22.468 6.971-6.488-6.971-6.48M24.008 15.98H8">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="view-all"><a href="https://dwao.in/insights-and-case-studies/">View all case studies</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@if($blog->users)
<!-- Author Section -->
<section class="author-sec">
    <div class="container">
        <h2 class="author-sec-title">Authors</h2>
        <div class="author-list">
            @foreach($blog->users as $user)
                <div class="author_card">
                    <div class="author_card-head">
                        <img src="{{ $user->image }}" alt="">
                    </div>
                    <div class="author_card-body">
                        <h4>{{ $user->name }}</h4>
                        <div>{{ $user->bio }}</div>
                    </div>
                    <ul class="author_card-social">
                        @if($user->twitter)
                        <li>
                            <a href="http://{{ $user->twitter }}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z"></path></svg></a>
                        </li>
                        @endif
                        @if($user->linkedin)
                        <li>
                            <a href="http://{{ $user->linkedin }}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><circle cx="4.983" cy="5.009" r="2.188"></circle><path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path></svg></a>
                        </li>
                        @endif
                        @if($user->facebook)
                        <li>
                            <a href="http://{{ $user->facebook }}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z"></path></svg></a>
                        </li>
                        @endif
                        @if($user->instagram)
                        <li>
                            <a href="http://{{ $user->instagram }}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"></path></svg></a>
                        </li>
                        @endif
                        @if($user->youtube)
                        <li>
                            <a href="http://{{ $user->youtube }}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21.593 7.203a2.506 2.506 0 0 0-1.762-1.766C18.265 5.007 12 5 12 5s-6.264-.007-7.831.404a2.56 2.56 0 0 0-1.766 1.778c-.413 1.566-.417 4.814-.417 4.814s-.004 3.264.406 4.814c.23.857.905 1.534 1.763 1.765 1.582.43 7.83.437 7.83.437s6.265.007 7.831-.403a2.515 2.515 0 0 0 1.767-1.763c.414-1.565.417-4.812.417-4.812s.02-3.265-.407-4.831zM9.996 15.005l.005-6 5.207 3.005-5.212 2.995z"></path></svg></a>
                        </li>
                        @endif
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
@endpush

@push('scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<script>
    $(document).ready(function(){
        $('.copy_link').click(function(){
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(this).data('url')).select();
            document.execCommand("copy");
            $temp.remove();
            Toastify({
                text: "Link copied to clipboard",
                duration: 3000,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
                onClick: function(){} // Callback after click
            }).showToast();
        });
    });
</script>

@endpush
