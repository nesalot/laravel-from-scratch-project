@extends('master')

@section('content')
    <h1>Create a Project:</h1>

    <form method="POST" action="/projects">
        @csrf

    	<div class="form-group">
    		<label for="title">Project Title:</label>
    		<input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" value="{{ old('title') }}" required>
    	</div>

    	<div class="form-group">
    		<label for="description">Project Description</label>
    		<textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" rows="3" required>{{ old('description') }}</textarea>
    	</div>

        @include ('errors')
		
		<div class="row mx-auto">
			<div class="mr-3">
				<a href="/projects">
					<button type="button" class="btn btn-secondary">Cancel</button>
				</a>
			</div>

			<div>
				<button type="submit" class="btn btn-primary">Create Project</button>
			</div>
		</div>
    </form>

@endsection