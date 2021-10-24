@extends('3i_school.layouts.master')

@section('title')
Blog & News
@stop

@section('content')

        <!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="sc-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{ asset('3i_school') }}/assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Blog & News</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{route('home')}}">Home ></a>
                        </li>
                        <li class="active">Blog & News</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Blog Section Start -->
            <div id="sc-blog" class="sc-blog main-home pb-110 pt-120 md-pb-70 md-pt-80">
                <div class="container">
                    <div class="row">
                    @foreach ($all_news as $news)


                        <div class="col-lg-4 col-md-6 mb-30 loadcourse addcourse">
                            <div class="blog-item">
                                <div class="image-part">
                                    {{-- <img src="{{ asset('3i_school') }}/assets/images/blog/1.jpg" alt=""> --}}
                                    <img style="max-width:100%; height:400px" src=" {{ URL::to('/') }}/public/media/news/{{ $news-> ftd_img }}" alt="">

                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-user-o"></i> Admin</li>
                                        <li><i class="fa fa-calendar"></i>{{date('d F, Y ', strtotime($news-> created_at))}}</li>
                                    </ul>
                                    <h3 class="title"><a href="{{route('singleNews',$news->id)}}">{{Illuminate\Support\Str::limit($news -> title, 35)}}</a></h3>
                                    <div class="desc">{{Illuminate\Support\Str::limit($news -> details, 100)}}</div>
                                    <div class="btn-btm">
                                        <div class="rs-view-btn">
                                            <a href="{{route('singleNews',$news->id)}}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                     </div>
                     <div id="loadmore" class="text-center mt-30 md-mt-10">
                        <a class="readon" href="#">Learn More <i class="flaticon flaticon-right-arrow"></i> </a>
                    </div>
                </div>
            </div>
            <!-- Blog Section End -->




        </div>
        <!-- Main content End -->

        @stop
