@extends('admin.layouts.admin-master')

@section('title')
Schooling Subject
@stop

@section('content')
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Schooling Subject</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Schooling Subject</li>
            </ul>
        </div>
        <div class="row">
            <!-- Your Profile Views Chart -->
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <div class="wc-title">


                        <form class="row" action="{{ route('admin.schooling.subject.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-6">
                                <label for="parent_id1">Category</label>
                                <select id="category" class="form-control" name="parent_id1" >
                                    <option selected="selected" disabled>If you want to set under Parent Category then Select</option>
                                    @forelse ($schoolingCategories as $category)

                                    <option value="{{ $category->id }}">{{ $category->name }}</option>

                                    @empty
                                    Data not Found!!
                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="parent_id2">Sub Category</label>
                                <span id="sub_cat">
                                    <select id="sub_category" class="form-control" name="parent_id2" >
                                    <option selected="selected" disabled>If you want to set under Sub Category then Select</option>
                                </select>
                                </span>
                                
                            </div>
                            <div class="form-group col-md-6">
                                <label for="CategoryName">Category Name</label>
                                <input type="text"  class="form-control" name="name" placeholder="Enter category name" value="{{ old('name') }}" required>
                                @if($errors->has('choice4'))
                                <p class="alert alert-warning">{{$errors->first('name')}}
                                    <button class="close" data-dismiss="alert">&times;</button>
                                </p>
                                @endif
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="title">Schooling Photo</label>
                                <input type="file" class="form-control" id="photo" name="photo" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="title">Subject Details</label>
                                <textarea name="details" class="form-control" id="details" placeholder="Course details here" style="width: 100%" rows="10" required></textarea>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" id="add_btn" type="submit" value="Add">

                            </div>
                        </form>

                    </div>
                    @include('validate')
                    <div class="">

                        <div class="">

                            <table id="quiztable" class="table table-striped">
                                <thead class="bg-light text-capitalize">
                                <tr>
                                    <th width="5%">Sl</th>
                                    <th width="10%">Subject Image</th>
                                    <th width="15%">Parent Category</th>                                    
                                    <th width="15%">Slug</th>
                                    <th width="40%">Subject Details</th>
                                    <th width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($schoolingCategories as $category)
                               <tr>

                               

                                    <td>{{$loop->index +1}}</td>
                                    <td><img style="width: 100px; height: 100px;" src="{{ URL::to('/') }}/public/3i_school/img/schooling/{{
                                        $category->photo}}" alt=""></td>
                                        <td><a class="badge badge-success" href="{{ route('schooling_sub_category', $category->id) }}">{{ $category->name }}</a></td>                                    
                                    <td>{{$category->slug}}</td>
                                    <td>{{$category->brief_details}}</td>

                                    <td>
                                        <div class="btn-group">


                                        <a class="btn button text-white" id="delete_btn" href="{{ route('admin.schooling.subject.delete', $category->id) }}">
                                            <i class="fa fa-trash"></i>
                                        </a>
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
