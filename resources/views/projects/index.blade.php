@extends('master')

@section('content')
    <div class="d-flex justify-content-between">
	    <h1>All Projects:</h1>
	    <div id="create_project" class="mr-3">
			<a href="/projects/create">
				<button type="button" class="btn btn-primary">Create Project</button>
			</a>
		</div>
	</div>
	<div class="mt-2">
		<table class="table table-striped bg-white border">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Title</th>
		      <th scope="col">Description</th>
		    </tr>
		  </thead>
		  <tbody>
		    @foreach ($projects as $project)
		    	{{-- <li>{{ $project->title }}</li> --}}
			    <tr>
			      <th scope="row">{{ $loop->iteration }}</th>
			      <td><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></td>
			      <td>{{ $project->description }}</td>
			    </tr>
		    @endforeach
		</tbody>
		</table>
	</div>
@endsection