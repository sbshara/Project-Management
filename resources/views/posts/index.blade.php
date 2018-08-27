@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Posts</h1>
	<hr/>
	@foreach($posts as $post)
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Body: <a href="posts/{{ $post->id }}"><small>{{ $post->body }}</small></a></h4>
		</div>
		<div class="panel-body">
			<h5>Category: <small>{{ $post->category->name }}</small></h5>
		</div>
		<div class="panel-footer">
			<h5>Created By: <small>{{ $post->user->name }}</small></h5>
		</div>
	</div>
	<hr/>
	@endforeach
	
</div>
@endsection