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
    <div id="summary" class="scroll_to"></div>
    <div class="inner-section">
        <div class="container">
            <div class="summery">
                <ul>
                    <li>
                        <div class="title">Industry</div>
                        <div class="desc">
                            {{ $blog->overview_industry }}
                        </div>
                    </li>
                    <li>
                        <div class="title">Location</div>
                        <div class="desc">
                            {{ $blog->overview_location }}
                        </div>
                    </li>
                    <li>
                        <div class="title">Solutions</div>
                        <div class="desc hover_arrow">
                            {!! $blog->overview_solutions !!}
                        </div>
                    </li>
                    <li>
                        <div class="title">Results</div>
                        <div class="desc">
                            {!! $blog->overview_results !!}
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
                    <div class="left">{{ $blog->background_title }}</div>
                    <div class="right">
                        <p>{!! $blog->background_description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner">
        <img src="{{$blog->background_image}}">
    </div>
    <div id="objective" class="scroll_to"></div>
    <div class="inner-section gray">
        <div class="container">
            <div class="grid">
                <div class="head">Objective</div>
                <div class="dual-col">
                    <div class="left">{{ $blog->objective_title }}</div>
                    <div class="right">
                        {!! $blog->objective_description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="solution" class="scroll_to"></div>
    <div class="inner-section gray">
        <div class="container">
            <div class="grid">
                <div class="head">Solution</div>
                @foreach($blog->solution_title as $solution)
                <div class="dual-col sec-repeat">
                    <div class="left">{{ $solution }}</div>
                    <div class="right">
                        <p>{!! $blog->solution_description[$loop->index] !!}</p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        <div class="inner-section gray">
            <div class="container">
                <div class="grid">
                    <div class="banner-text">
                        <div class="thumb">
                            <img src="{{ $blog->case_study_image }}">
                        </div>
                        <div class="text">
                           {!! $blog->case_study_title !!}
                        </div>
                    </div>
                </div>
                <div id="result" class="scroll_to"></div>
                <div class="grid">
                    <div class="head">Result</div>
                    <div class="dual-col">
                        <div class="left">{{ $blog->result_title }}</div>
                        <div class="right">
                            {!! $blog->result_description !!}
                        </div>
                    </div>
                </div>
                @if($blog->user_pofile_description)
                <div class="grid">
                    <div class="banner-text alt">
                        <div class="text">
                            {!! $blog->user_pofile_description !!}
                            <div class="author">
                                <strong>{{$blog->user_pofile_name}},</strong> {{$blog->user_pofile_designation}}
                            </div>
                        </div>
                        <div class="thumb">
                            <img src="{{$blog->user_pofile_image}}">
                        </div>
                    </div>
                </div>
                @endif

                <div class="features">
                    <ul>
                        @foreach($blog->counter_numbers as $number)
                        @if(!$number)
                            @continue
                        @endif
                        <li>
                            <div class="title">{{ $number }}</div>
                            <div class="desc">
                                <p>{{ $blog->counter_text[$loop->index] }}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div id="related-capabilities" class="scroll_to"></div>
        <div class="inner-section gray">
            <div class="container">

                <div class="learn-more">
                    <h3>Related case studies</h3>
                    <div id="slider-wrapper" class="case-studies-slider-inner">
                        @foreach($relatedBlogs as $blog)
                        <div class="slide"> 
                            <img src="{{$blog->thumbnail_image}}" alt="Reliance">
                            <div class="desc">
                                <div class="bookmark"><a href="reliance-mutual-fund-case-study.html" tabindex="-1"></a></div>
                                <h4>{{ $blog->category->name }} | {{ $blog->subCategory->name }}</h4>
                                <h3>{{ $blog->thumbnail_title }}</h3>
                                <p>{{ $blog->thumbnail_title }}</p>
                                <div class="cta"><a href="{{ route('blog.view',$blog->slug) }}" tabindex="-1">
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
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="view-all"><a href="https://dwao.in/insights-and-case-studies/">View all case studies</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
