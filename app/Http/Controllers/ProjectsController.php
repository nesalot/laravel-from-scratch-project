<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $projects = Project::where('owner_id', auth()->id())->get();

        //dump($projects);  //example to see dumps in telescope

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $validated = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3']
        ]);

        $validated['owner_id'] = auth()->id();

        Project::create($validated);

        return redirect('/projects');
    }

    public function show(Project $project)
    {
        abort_if($project->owner_id !== auth()->id(), 403);
 
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {

        $project->update(request(['title', 'description']));

        return redirect('/projects');

    }

    public function destroy(Project $project)
    {
         $project->delete();

         return redirect('/projects');
    }
}
