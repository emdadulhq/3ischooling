@extends('admin.layouts.admin-master')

@section('title')
Roles & Permissions
@stop

@section('content')
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">User Roles</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>User Roles</li>
            </ul>
        </div>
        <div class="row">
            <!-- Your Profile Views Chart -->
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <div class="wc-title">
                     <a class="btn btn-sm" href="{{ route('roles.create') }}"><i
                        class="fa fa-plus"></i>&nbsp;&nbsp; Add </a>

                    </div>
                    <hr>

                    <table class="table table-striped">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th width="5%">Sl</th>
                                <th width="20%">Name</th>
                                <th width="65%">Permissions</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach ($roles as $role)
                         <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                @foreach ($role->permissions as $perm)
                                <span class="badge badge-info mr-1">
                                    {{ $perm->name }}
                                </span>
                                @endforeach
                            </td>
                            <td>
                                <div class="btn-group">
                                    @if (Auth::guard('web')->user()->can('roles.edit'))
                                    
                                    
                                    <a class="btn btn-success text-white" href="{{ route('roles.edit', $role->id) }}"><i class="fa fa-edit"></i></a>
                                    @endif

                                    @if (Auth::guard('web')->user()->can('roles.edit'))
                                    <form id="delete-user-form" action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return false" id="delete-btn" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                    @endif
                                    {{--<a class="btn btn-danger text-white" href="{{ route('roles.destroy', $role->id) }}"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $role->id }}').submit();">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                                <form id="delete-form-{{ $role->id }}" action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display: none;">
                                    @method('DELETE')
                                    @csrf


                                </form> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Your Profile Views Chart END-->
        </div>
    </div>
</main>
@stop
