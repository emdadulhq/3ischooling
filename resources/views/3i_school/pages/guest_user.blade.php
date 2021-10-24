@extends('3i_school.layouts.master')

@section('title')
Profile
@stop

@push('styles')

@endpush

@section('content')
<div class="main-content">
	<div style="min-height: 500px;">
		<div class=" container text-center">{{ Auth::user()->name }}</div>
	</div>
</div>
@stop