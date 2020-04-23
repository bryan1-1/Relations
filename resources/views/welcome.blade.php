@extends('layouts.index')

@section('content')
<h2>Users</h2>
<a href="/projects/create" class="btn btn-success">Create Project</a>
@foreach ($users as $user)
<p>Name: {{$user ->name}}</p>
<p>E-mail: {{$user ->email}}</p>
<hr>
@endforeach
<hr>
<h2>Projects</h2>
<a href="/tasks/create" class="btn btn-success">Add Tasks</a>
@foreach ($projects as $project)
<p>Title: {{$project ->project_name}}</p>
<p>Description: {{$project ->project_description}}</p>
<p>Belongs to: {{$project->user->name}} </p>
<hr>
@endforeach
<hr>
<h2>Tasks</h2>
@foreach ($tasks as $task)
<p>Task name: {{$task ->task_name}}</p>
<p>Task Description: {{$task ->task_description}}</p>
<p>Belongs to {{$task->project->project_name}} Project</p>
<hr>
@endforeach


@endsection