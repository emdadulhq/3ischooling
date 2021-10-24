
@extends('admin.layouts.admin-master')

@section('title')
Teacher
@stop

@section('content')


<!--Main container start -->
<main class="ttr-wrapper">
  <div class="container-fluid">
   <div class="db-breadcrumb">
    <h4 class="breadcrumb-title">Teacher</h4>
    <ul class="db-breadcrumb-list">
     <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
     <li>Teacher</li>
 </ul>
</div>
<div class="row">
 <!-- Your Profile Views Chart -->
 <div class="col-lg-12 m-b30">
    <div class="widget-box">
        <div class="wc-title">
           <a class="btn btn-sm" href="{{route('admin.teacher.create')}}"><i
            class="fa fa-plus"></i>&nbsp;&nbsp; Add Teacher</a>
        </div>
        @include('validate')
        <div class="">

            <div class="">
                <table class="table table-striped" id="coursetable">
                    <thead class="bg-light text-capitalize">
                        <tr>
                            <th width="3%">Sl</th>
                            <th width="8%">Photo</th>
                            <th width="15%">Name</th>
                            <th width="15%">Email & Phone</th>
                            <th width="25%">About</th>
                            <th width="15%">Social Link</th>
                            <th width="10%">Skills</th>
                            <th width="5%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teacher_list as $details)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td><img style="height: 80px; width:80px;" src="{{ URL::to('/') }}/public/media/teacher/{{ $details-> photo }}"></td>
                            <td>{{$details->name}} <br><span class="badge badge-info mr-1">
                                {{$details->department}}
                            </span></td>
                            <td>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                {{$details->email}} <br>
                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                                {{$details->phone}}</td>
                                <td>{{Illuminate\Support\Str::limit($details -> about, 100)}}</td>
                                <td>
                                    <ul>
                                        <li>{{$details->link_fb}}</li>
                                        <li>{{$details->link_tw}}</li>
                                        <li>{{$details->link_li}}</li>
                                        <li>{{$details->link_in}}</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul style="list-style: none;">
                                        <li>Bangla:<span class="badge badge-info mr-1">
                                            {{$details->skill_bn}}%
                                        </span></li>
                                        <li>English:<span class="badge badge-info mr-1">
                                            {{$details->skill_en}}%
                                        </span></li>
                                        <li>Speaking:<span class="badge badge-info mr-1">
                                            {{$details->skill_sp}}%
                                        </span></li>
                                        <li>Writing:<span class="badge badge-info mr-1">
                                            {{$details->skill_wr}}%
                                        </span></li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        @if (Auth::guard('web')->user()->can('admin.teacher.edit'))  
                                        <a class="btn btn-success text-white" href="{{route('admin.teacher.edit', $details->id )}}"><i class="fa fa-edit"></i></a>
                                        @endif
                                        @if (Auth::guard('web')->user()->can('admin.teacher.edit'))  
                                        <a class="btn button text-white" id="delete_btn" href="{{ route('admin.teacher.delete', $details->id) }}"><i class="fa fa-trash"></i></a>
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

