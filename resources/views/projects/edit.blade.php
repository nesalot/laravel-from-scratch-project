@extends('master')

@section('content')
    <h1>Edit a Project:</h1>

    <form method="POST" action="/projects/{{ $project->id }}">
        @csrf
        @method('PATCH')

    	<div class="form-group">
    		<label for="title">Project Title:</label>
    		<input type="text" class="form-control" name="title" placeholder="Project Title" value="{{ $project->title }}">
    	</div>

    	<div class="form-group">
    		<label for="description">Project Description</label>
    		<textarea class="form-control" name="description" rows="3" placeholder="Project Description">{{ $project->description }}</textarea>
    	</div>
	
    	<div class="d-flex justify-content-between">
            <div class="d-flex">
        		<div class="mr-3">
        			<a href="/projects">
        				<button type="button" class="btn btn-secondary">Cancel</button>
        			</a>
        		</div>  
        		<div>
        			<button type="submit" class="btn btn-primary">Update Project</button>
        		</div>
            </div>
    </form>
    <form method="POST" action="/projects/{{ $project->id }}">
        @csrf
        @method('DELETE')
        <div>
            <button type="submit" class="btn btn-danger">Delete Project</button>
        </div>
    </form>
	</div>

@endsection