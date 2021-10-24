@extends('admin.layouts.admin-master')

@section('title')
Testimonial
@stop

@section('content')
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Testimonial</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Testimonial</li>
            </ul>
        </div>
        <div class="row">
            <!-- Your Profile Views Chart -->
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <div class="wc-title">


                        <form class="row" action="{{ route('admin.testimonial.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group col-md-6">
                                <label for="title">Students Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter a Students Name" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="title">Making Stars</label>
                                <input type="text" class="form-control" id="star" name="star" placeholder="Star" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="title">Students Photo</label>
                                <input type="file" class="form-control" id="photo" name="photo" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="title">Review Details</label>
                                <textarea name="details" class="form-control" id="details" placeholder="Review details here" style="width: 100%" rows="10" required></textarea>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" id="add_btn" type="submit" value="Add">

                            </div>
                        </form>

                    </div>
                    @include('validate')
                    <div class="">

                        <div class="">

                            <table class="table table-striped">
                                <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th width="5%">Sl</th>
                                        <th width="10%">Student Image</th>
                                        <th width="15%">Student Name</th>
                                        <th width="50%">Review Details</th>
                                        <th width="5%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($testimonial_list as $list)
                                    <tr>

                                        <td>{{$loop->index +1}}</td>
                                        <td><img style="width: 100px; height: 100px;" src="{{ URL::to('/') }}/public/media/testimonial/{{
                                            $list->photo}}" alt=""></td>
                                            <td>{{$list->name}} <br> <span class="badge badge-danger mr-1">
                                                @for ($i=0;$i < $list->star;$i++)
                                                <i class="fa fa-star"></i></li>
                                                @endfor
                                            </td>
                                            <td>{{$list->details}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    @if (Auth::guard('web')->user()->can('admin.testimonial.delete'))  
                                                    <a class="btn button text-white" id="delete_btn" href="{{ route('admin.testimonial.delete', $list->id) }}"><i class="fa fa-trash"></i></a>
                                                    @endif
                                                </div>
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
