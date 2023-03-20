@extends('layouts.superAdmin.Faculty.mainLayout')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Faculties</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-success" href="{{ route('faculties.create') }}"> Create New Faculty</a>
		</div>
	</div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
	<tr>
		<th>No</th>
		<th>Name</th>
		<th width="280px">Action</th>
	</tr>
	@foreach ($faculties as $faculty)
	<tr>
		<td>{{ $faculty->id }}</td>
		<td>{{ $faculty->name }}</td>

		<td>
			<form action="{{ route('faculties.destroy',$faculty->id) }}" method="POST">
				
				<a class="btn btn-info" href="{{ route('faculties.show',$faculty->id) }}">Show</a>
				
				<a class="btn btn-primary" href="{{ route('faculties.edit',$faculty->id) }}">Edit</a>
				
				@csrf
				@method('DELETE')
				
				<button type="submit" class="btn btn-danger">Delete</button>
			</form>
		</td>
	</tr>
	@endforeach
</table>

{!! $faculties->links() !!}


@endsection