@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Name: <a href="companies/{{ $company->id }}"><small>{{ $company->name }}</small></a></h1>
	<h5>Description: <small>{{ $company->description }}</small></h5>
	<h5>Created By: <small>{{ $company->user()->name }}</small></h5>
	
	<br/>
	
	<a href="{{ $company->id }}/edit">Edit</a>
	
		<br/>
		<br/>
		<br/>
	<h3>Projects:</h3>
	<hr/>
	<ul>
	@foreach( $company->companyProjects() as $project )
		<li><a href="{{ route('projects.show', $project->id) }}">{{ $project->name }}</a></li>
	@endforeach
	</ul>
</div>
@endsection