@extends('layouts.adminLTE.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard
			<small>
				@if (session('status'))
				<div class="alert alert-success" role="alert">
					{{ session('status') }}
				</div>
				@endif
			</small>
		</h1>
		@include('layouts.adminLTE.breadCrumb')
	</section>
	<!-- Main content -->
	<section class="content container-fluid">
		<p>You are logged in!</p>
	</section>
	<!-- /.content -->
</div>
@endsection

@section('additionalCSS')

@endsection

@section('additionalJS')

@endsection
