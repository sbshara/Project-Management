@extends('layouts.adminLTE.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Shiblie Project Management 
		</h1>
		@include('layouts.adminLTE.breadCrumb')
	</section>
	<!-- Main content -->
	<section class="content container-fluid">
				<section><small>version 1.0 --dev</small></section>
				<hr/>
                <div class="links">
					<ul>
						<li><a href="https://laravel.com/docs">Documentation</a></li>
						<li><a href="https://laracasts.com">Laracasts</a></li>
						<li><a href="https://laravel-news.com">News</a></li>
						<li><a href="https://forge.laravel.com">Forge</a></li>
                    	<li><a href="https://github.com/laravel/laravel">GitHub</a></li>
					</ul>
                </div>
	</section>
	<!-- /.content -->
</div>
@endsection