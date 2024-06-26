@extends('frontend.layouts.app')

@section('meta_title','DWAO - Blogs')
@section('body_class','case_study_list_page has-no-banner')
@section('meta_description',$meta->meta_description)

@push('styles')
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
@endpush

@section('content')
<section class="case_studies no-banner">
    <div class="container">
        
        <div class="row">
            <div class="col-12">
                <div class="case_studies-filters">
                    <h4 class="case_studies-filters-title"><span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><path d="M7 11h10v2H7zM4 7h16v2H4zm6 8h4v2h-4z"></path></svg></span> Filter By:</h4>
                    <div class="offcanvas">
                        <button type="button" class="offcanvas-menu-btn menu-status-open">
                            <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                            </span>
                        </button>
                    </div>
                    <ul class="case_studies-filters-wrap">
                        @foreach($categories as $category)
                            <li class="has-dropdown">
                                <a href="#">{{$category->name}}</a>
                                <ul>
                                    @foreach($category->subCategories as $subCategory)
                                        <li class="sub_category 
                                            @if(request()->has('subCatId') && request()->subCatId == $subCategory->id)
                                                active
                                            @endif
                                        " data-catId="{{ $subCategory->id }}"><a href="javascript:;">{{ $subCategory->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                    <div class="reset-filter"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M10 11H7.101l.001-.009a4.956 4.956 0 0 1 .752-1.787 5.054 5.054 0 0 1 2.2-1.811c.302-.128.617-.226.938-.291a5.078 5.078 0 0 1 2.018 0 4.978 4.978 0 0 1 2.525 1.361l1.416-1.412a7.036 7.036 0 0 0-2.224-1.501 6.921 6.921 0 0 0-1.315-.408 7.079 7.079 0 0 0-2.819 0 6.94 6.94 0 0 0-1.316.409 7.04 7.04 0 0 0-3.08 2.534 6.978 6.978 0 0 0-1.054 2.505c-.028.135-.043.273-.063.41H2l4 4 4-4zm4 2h2.899l-.001.008a4.976 4.976 0 0 1-2.103 3.138 4.943 4.943 0 0 1-1.787.752 5.073 5.073 0 0 1-2.017 0 4.956 4.956 0 0 1-1.787-.752 5.072 5.072 0 0 1-.74-.61L7.05 16.95a7.032 7.032 0 0 0 2.225 1.5c.424.18.867.317 1.315.408a7.07 7.07 0 0 0 2.818 0 7.031 7.031 0 0 0 4.395-2.945 6.974 6.974 0 0 0 1.053-2.503c.027-.135.043-.273.063-.41H22l-4-4-4 4z"></path></svg> <span>Reset</span></div>
                </div>
            </div>
        </div>
        <div class="case_studies-list">
            @foreach($recentBlogs as $blog)

                <div class="post_card">
                    <a class="post_card_wrap" href="{{ route('blog.view',$blog->slug) }}">
                        <div class="post_card-img">
                            <div style="background-image: url('{{ $blog->thumbnail_image }}');"></div>
                        </div>
                        <div class="post_card-body">
                            <div class="post_card-cat">
                                <div class="post_card-cat-title"><span>{{$blog->category->name}}</span> | <span>{{$blog->subCategory->name}}</span></div>
                            </div>
                            <div class="post_card-body-content">
                                <h4 class="post_card-body-content-title">{{ $blog->thumbnail_title }}</h4>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        {{ $recentBlogs->links() }}
    </div>
</section>

@endsection

@push('scripts')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){

            $('.case_studies-feature_list').slick({
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
                dots: true,
                responsive: [
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            $('.category').click(function(){
                var catId = $(this).data('catid');
                window.location.href = "{{ route('index') }}?catId="+catId;
            });

            $('.sub_category').click(function(){
                var catId = $(this).data('catid');
                window.location.href = "{{ route('index') }}?subCatId="+catId;
            });

            $(".reset-filter").click(function(){
                location.href="{{ env('APP_URL') }}"
            });

            $(".offcanvas-menu-btn").click(function(){
                $(this).toggleClass("close");
                $('.case_studies-filters-wrap').toggleClass("open");
            });

            $(".case_studies-filters-wrap > li.has-dropdown").click(function(){
                $(this).toggleClass("active");
            });
        });
    </script>
@endpush
