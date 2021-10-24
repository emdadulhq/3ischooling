@extends('admin.layouts.user-master')

@section('title')
Guest User
@stop

@section('content')


    <div class="container">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Guest User</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Guest User</li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <button><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Logout
                </a></button>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <div class="">

                    <table class="table table-striped">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th width="5%">Sl</th>
                                <th width="20%">Name</th>
                                <th width="35%">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($users as $user)
                           <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Your Profile Views Chart END-->
    </div>
</div>

@stop