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
                    <h1 class="page-title">Blog Single</h1>
                    <ul>
                        <li>
                            <a class="active" href="#">Home ></a>
                        </li>
                        <li class="active">Blog Single</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Blog Single Start -->
            <div class="sc-blog-single pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8">
                           <div class="blog-deatails">
                                <div class="post-img text-center">

                                    <img src="{{ URL::to('/') }}/public/media/news/{{
                                        $singleNews->ftd_img}}" alt="">
                                </div>
                               <div class="blog-full">
                                   <ul class="single-post-meta">

                                       <li>
                                           <span class="p-date"> <i class="fa fa-user-o"></i> admin </span>
                                       </li>
                                       <li>
                                           <span class="p-date"> <i class="fa fa-calendar-check-o"></i> {{date('F d, Y ', strtotime($singleNews-> created_at))}} </span>
                                       </li>
                                       <li class="post-comment"><i class="fa fa-comments-o"></i> 0</li>
                                   </ul>
                                   <div class="blog-desc">
                                    <h4>{{$singleNews->title}}</h4>
                                        <p> {{ $singleNews-> details}}
                                       </p>
                                   </div>
                                   {{-- <div class="tags-area">
                                        <span class="tags">Tags</span>
                                        <ul class="tags-list">
                                            <li> <a href="#">Education</a> </li>
                                            <li> <a href="#">Computer</a> </li>
                                        </ul>
                                   </div> --}}
                               </div>
                           </div>

                            <br>


                            @foreach ($singleNews -> comments as $singleComments)
                                    @if ($singleComments-> comment_id ==null)





									<div class="cource-review-box mb-30">
										<h4>{{$singleComments-> user -> name}}</h4>

										<div class="text">{{$singleComments-> comment_txt}}</div>

                                        @guest
                                        <p>For reply you need <a href="{{ route('login') }}">login</a> first before
                                            place your comments</p>

                                    @else
                                    <div class="cource-review-box mb-30 ml-80 md-ml-0">

                                        @php
                                        $reply_comment = App\Models\NewsComments::where('comment_id','!=',null)->where('comment_id', $singleComments-> id)->get();
                                        @endphp

                                        @foreach ($reply_comment as $comm )

                                        <br>
                                        <h4>{{ $comm ->user ->name}}</h4>

                                            <div class="text">{{ $comm -> comment_txt }}</div>


                                            @endforeach

                                    <a href="#"  class="comment-reply-btn" c_id="{{$singleComments->id}}">Reply</a>

                                        <div style="display: none;" id="comment_reply_box"
                                             class="comment-reply-box-{{$singleComments->id}}">
                                            <form action=" {{ route('news.comment.reply') }}" class="comment-form" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="hidden" name="post_id" value="{{ $singleNews->id }}">
                                                    <input type="hidden" name="comment_id" value="{{
                                                    $singleComments->id }}">
                                                    <textarea name="reply_txt" placeholder="Type your reply!" cols="40" rows="5" class="textarea form-control" required=""></textarea>
                                                </div>
                                                <div class="submit-btn">
                                                    <button type="submit" class="submit btn">Post Reply</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    @endguest


									</div>
                                    @endif
                                    @endforeach


                                    <div id="loadmore" class="text-center mt-30">
                                        <a href="#" class="mt-20 readon">View More Comments</a>
                                    </div>



                                    @guest
                                    <p>Please <a href="{{ route('login') }}">login</a> first before place your comments</p>

                                @else
                                <!-- Blog Single Start -->
                                <div class="sc-blog-single pt-120 pb-120 md-pt-80 md-pb-80">
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-lg-12">

                                            <div class="comment-area">
                                                <div class="comment-full">
                                                    <h3 class="reply-title">Add to Comment</h3>
                                                        <form action="{{ route('news.comment') }}" class="comment-form" method="POST">
                                                            @csrf
                                                            <div class="form-group">
                                                                <input type="hidden" name="post_id" value="{{ $singleNews->id }}">
                                                                <textarea name="comments" placeholder="Message" cols="40" rows="10" class="textarea form-control" required=""></textarea>
                                                            </div>

                                                            <div class="submit-btn">
                                                                <button type="submit" class="submit btn">Post Comment</button>
                                                            </div>
                                                        </form>


                                                </div>
                                            </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Blog Single End -->

                                @endguest


                        </div>
                        <div class="col-lg-4 col-md-12 md-mt-60">
                            <div class="widget-area">
                                <div class="search-widget mb-50">
                                    <div class="search-wrap">
                                        <form action="{{route('news.search')}}" method="GET">
                                            @csrf
                                            <input type="search" placeholder="Searching..." name="search" class="search-input" value="">
                                            <button type="submit" value="Search"><i class="flaticon flaticon-magnifying-glass"></i>
                                        </form>
                                        </button>
                                    </div>
                                </div>

                                <div class="recent-posts-widget mb-50">
                                    <h3 class="widget-title">Recent Posts</h3>
                                    @foreach ($all_news as $allNews)


                                    <div class="show-featured ">
                                        <div class="post-img">
                                            <a href="{{route('singleNews',$allNews->id)}}">
                                                <img style="max-width:100%; height:80px" src=" {{ URL::to('/') }}/public/media/news/{{ $allNews-> ftd_img }}" alt="">
                                                </a>
                                        </div>
                                        <div class="post-desc">
                                            <a href="{{route('singleNews',$allNews->id)}}">{{Illuminate\Support\Str::limit($allNews -> title, 35)}}</a>
                                            <span class="date">
                                                <i class="fa fa-calendar"></i>
                                                {{date('F d, Y ', strtotime($allNews-> created_at))}}
                                            </span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="posts-tags mb-50 md-mb-0">
                                      <h3 class="widget-title">Tags</h3>
                                      <ul>
                                          @foreach ($news_tag as $post)
                                          <li><a href="{{route('news.tag', $post->id)}}">{{$post->name}}</a></li>
                                          @endforeach
                                      </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Single End -->

@stop
