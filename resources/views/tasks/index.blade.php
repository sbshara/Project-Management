@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Companies</h1>
	<hr/>
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
	<hr/>
	@endforeach
	
</div>
@endsection