@extends('layouts.adminLTE.app')

@section('content')

<div class="content-wrapper">
	<section class="content-header">
		<h1>Companies <small>All registered companies</small></h1>
		@include('layouts.adminLTE.breadCrumb')
	</section>
    <!-- Main content -->
    <section class="content container-fluid">
		<div class="box">
			<div class="box-body">
				<table id="example2" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Company Name</th>
							<th>Description</th>
							<th>Created By</th>
							<th>No. Projects</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach($companies as $company)
						<tr>
							<td>{{ $company->id }}</td>
							<td><a href="{{ route('companies.show', $company->id) }}">{{ $company->name }}</a></td>
							<td>{{ $company->description }}</td>
							<td><a href="{{ route('users.show', $company->user_id) }}">{{ $company->user()->name }}</a></td>
							<td><a href="{{ route('companies.show', $company->id) }}">{{ count($company->companyProjects()) }} Projects (Click to view)</a></td>
							<td style="text-align: center;">
								<a href="{{ route('companies.edit', $company->id) }}"><i class="fa fa-edit"></i></a>&nbsp &nbsp
								<a href="{{ route('companies.destroy', $company->id) }}"><i class="fa fa-window-close"></i> </a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section>
</div>
@endsection


@section('additionalCSS')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('/') }}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection


@section('additionalJS')
<!-- DataTables -->
<script src="{{ url('/') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ url('/') }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="{{ url('/') }}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{ url('/') }}/bower_components/fastclick/lib/fastclick.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ url('/') }}/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection