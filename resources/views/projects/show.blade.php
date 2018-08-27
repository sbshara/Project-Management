@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Name: <a href="projects/{{ $project->id }}"><small>{{ $project->name }}</small></a></h1>
	<h5>Description: <small>{{ $project->description }}</small></h5>
	<h5>Created By: <small>{{ $project->user()->name }}</small></h5>
	
	<br/>
	
	<a href="{{ $project->id }}/edit">Edit</a>
	
		<br/>
		<br/>
		<br/>
	<h3>Tasks:</h3>
	<hr/>
	<ul>
	@foreach( $project->projectTasks() as $task )
		<li><a href="{{ route('tasks.show', $task->id) }}">{{ $task->name }}</a></li>
	@endforeach
	</ul>
</div>
@endsection