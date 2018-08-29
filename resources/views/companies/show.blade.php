@extends('layouts.adminLTE.app')

@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1>{{ $company->name }}<small>{{ $company->description }}</small></h1>
		@include('layouts.adminLTE.breadCrumb')
	</section>
	<!-- Main content -->
	<section class="content container-fluid">
		<div class="box">
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Project Name</th>
							<th>Description</th>
							<th>Created By</th>
							<th>No. Tasks</th>
							<th>Active</th>
							<th>Progress</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($company->companyProjects() as $project)
						<tr>
							<td><a href="{{ route('projects.index', $project->id) }}">{{ $project->name }}</a></td>
							<td>{{ $project->description }}</td>
							<td><a href="{{ route('users.show', $project->user_id) }}">{{ $project->projectUser()->name }}</a></td>
							<td><a href="{{ route('projects.show', $project->id) }}">{{ count($project->projectTasks()) }} Tasks (Click to view)</a></td>
							<td>{{ $project->active }}</td>
							<td>
								<div class="progress progress-sm active">
									<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: {{ $project->progress }}%">
										<span class="sr-only">{{ $project->progress }}% Completed</span>
									</div>
								</div>{{ $project->progress }}%</td>
							<td style="text-align: center;">
								<a href="{{ route('projects.edit', $project->id) }}"><i class="fa fa-edit"></i></a>&nbsp &nbsp
								<a href="{{ route('projects.destroy', $project->id) }}"><i class="fa fa-window-close"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
	</section>
</div>
@endsection

@section('additionalCSS')

@endsection

@section('additionalJS')

@endsection