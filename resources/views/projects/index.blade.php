@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Projects</h1>
	<hr/>
	@foreach($projects as $project)
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Name: <a href="projects/{{ $project->id }}"><small>{{ $project->name }}</small></a></h4>
		</div>
		<div class="panel-body">
			<ul>
				<li>Description: {{ $project->description }}</li>
				<li>Company: {{ $project->company->name }}</li>
				<li>
					<div class="progress">
						<div class="progress-bar" role="progressbar" style="width:{{ $project->progress }}%" aria-valuenow="{{ $project->progress }}" aria-valuemin="0" aria-valuemax="100">@if($project->active == 1) Active Project - Progress: @else Inactive Project - Last Progress: @endif {{ $project->progress }}%</div>
					</div>
				</li>
				<li>Created By: {{ $project->user->name }}</li>
			</ul>
		</div>
	</div>
	<hr class="style-eight">
	@endforeach
	
</div>
@endsection