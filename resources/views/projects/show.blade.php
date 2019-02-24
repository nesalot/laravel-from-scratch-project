@extends('master')

@section('content')
    <h1>{{ $project->title }}</h1>
    <hr class="my-3"></hr>
    <h5>{{ $project->description }}</h5>

    <div>
		<div class="row mx-auto mt-3">
			<div>
				<a href="/projects/{{ $project->id }}/edit">
					<div class="">Edit</button>
				</a>			
			</div>
		</div>
	</div>

    @if ($project->tasks->count())
	<div class="card mt-3">
		<h5 class="card-header">Project Tasks:</h5>
		<div class="card-body p-3">
			@foreach ($project->tasks as $task)
				<form method="POST" action="/tasks/{{ $task->id }}">
					@method('PATCH')
					@csrf

					<div class="form-check card-text">
						<label class="form-check-label {{ $task->completed ? 'is-completed' : '' }}" for="completed">	
							<input class="form-check-input" type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
							{{ $task->description }}
						</label>
					</div>
				</form>
			@endforeach
		</div>
		<div class="card-footer">
			
		</div>
	</div>
	@endif

	<form method="POST" action="/projects/{{ $project->id }}/tasks">
		@csrf
		<div class="jumbotron p-3 mt-3">
		<div class="form-row align-items-center">
			<div class="col-md-10">
				<label class="sr-only" for="formGroupExampleInput">Add New Task:</label>
				<input type="text" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" id="add_taskDescription" name="description" placeholder="New Task" required>
			</div>
			<div class="col-auto">
				<button type="submit" class="btn btn-primary">Add Task</button>
			</div>
		</div>
		</div>
	</form>

	@include ('errors')

@endsection
