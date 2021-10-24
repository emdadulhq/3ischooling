@extends('admin.layouts.admin-master')

@section('title')
User & Roles
@stop

@section('content')

<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">User and Roles</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>User and Roles</li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <div class="wc-title">
                     <a class="btn btn-sm" href="{{ route('users.create') }}"><i
                        class="fa fa-plus"></i>&nbsp;&nbsp; Add User</a>
                    </div>
                    <div class="">

                        <table class="table table-striped">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th width="5%">Sl</th>
                                    <th width="20%">Name</th>
                                    <th width="35%">Email</th>
                                    <th width="30%">Roles</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach ($users as $user)
                             <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach ($user->roles as $role)
                                    <span class="badge badge-info mr-1">
                                        {{ $role->name }}
                                    </span>
                                    @endforeach
                                </td>
                                <td>
                                    <div class="btn-group">
                                        @if (Auth::guard('web')->user()->can('roles.edit'))
                                        <a class="btn btn-success text-white" href="{{ route('users.edit', $user->id) }}"><i class="fa fa-edit"></i></a>
                                        @endif
                                        
                                        @if (Auth::guard('web')->user()->can('roles.edit'))
                                        <form id="delete-user-form" action="{{ route('users.destroy', $user->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return false" id="delete-btn" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                        @endif
                                        </div>
                                        {{-- <a class="btn btn-danger text-white" href="{{ route('users.destroy', $user->id) }}"
                                            onclick="event.preventDefault(); document.getElementById('delete-form-{{ $user->id }}').submit();">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    
                                    <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: none;">
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
            <!-- Your Profile Views Chart END-->
        </div>
    </div>
</main>

@stop
