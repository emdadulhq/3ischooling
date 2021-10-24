
@extends('admin.layouts.admin-master')

@section('title')
News
@stop

@section('content')


<!--Main container start -->
<main class="ttr-wrapper">
  <div class="container-fluid">
   <div class="db-breadcrumb">
    <h4 class="breadcrumb-title">News</h4>
    <ul class="db-breadcrumb-list">
     <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
     <li>News</li>
 </ul>
</div>
<div class="row">
 <!-- Your Profile Views Chart -->
 <div class="col-lg-12 m-b30">
    <div class="widget-box">
        <div class="wc-title">
           <a class="btn btn-sm" href="{{route('admin.news.create')}}"><i
            class="fa fa-plus"></i>&nbsp;&nbsp; Add News</a>
        </div>
        @include('validate')
        <div class="">

            <div class="">
                <table class="table table-striped" id="newstable">
                    <thead class="bg-light text-capitalize">
                        <tr>
                            <th width="5%">Sl</th>
                            <th width="15%">Title</th>
                            <th width="15%">Slug</th>
                            <th width="40%">Details</th>
                            <th width="10%">Featured Image</th>
                            <th width="10%">Tag</th>
                            <th width="5%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news_list as $details)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{Illuminate\Support\Str::limit($details -> title, 40)}}</td>
                            <td>{{$details->slug}}</td>
                            <td>{{Illuminate\Support\Str::limit($details -> details, 150)}}</td>
                            <td>
                                @if(!empty($details->ftd_img))
                                <img style="width: 60px; height: 60px;" src="{{ URL::to('/') }}/public/media/news/{{
                                    $details->ftd_img}}" alt="">
                                    @endif
                                </td>
                                <td>


                                    <span class="badge badge-info mr-1">
                                        {{$details->tag->name}}
                                    </span>


                                    {{-- {{ route('roles.edit', $role->id) }} --}}
                                </td>
                                <td>
                                    <div class="btn-group">
                                        @if (Auth::guard('web')->user()->can('admin.news.edit'))
                                        <a class="btn btn-success text-white" href="{{route('admin.news.edit', $details->id )}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        @endif
                                        @if (Auth::guard('web')->user()->can('admin.news.delete'))
                                        <a class="btn button text-white" id="delete_btn" href="{{ route('admin.news.delete', $details->id) }}">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        @endif
                                    </div>
                                            {{-- <form id="delete-form-{{ $details->id }}" action="{{ route('admin.course.delete', $details->id) }}" method="POST" style="display: none;">
                                                @method('DELETE')
                                                @csrf
                                            </form> --}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!-- Your Profile Views Chart END-->
            </div>
        </div>
    </main>
    @stop

