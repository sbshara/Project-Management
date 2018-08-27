@extends('layouts.adminLTE.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Companies <small>All registered companies</small>
		</h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Companies</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
		@foreach($companies as $company)
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h4>Name: <a href="companies/{{ $company->id }}"><small>{{ $company->name }}</small></a></h4>
			</div>
			<div class="panel-body">
				<h5>Description: <small>{{ $company->description }}</small></h5>
			</div>
			<div class="panel-footer">
				<h5>Created By: <small>{{ $company->user()->name }}</small></h5>
			</div>
		</div>
		@endforeach
    </section>
    <!-- /.content -->
  </div>
@endsection