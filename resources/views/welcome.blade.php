@extends('layouts.index')

@section('content')
<h2>Users</h2>
<a href="/projects/create" class="btn btn-success">Create Project</a>
@foreach ($users as $user)
<p>{{$user ->name}}</p>
<p>{{$user ->email}}</p>
<hr>
@endforeach
<hr>
<h2>Projects</h2>
<a href="/tasks/create" class="btn btn-success">Add Tasks</a>
@foreach ($projects as $project)
<p>{{$project ->project_name}}</p>
<p>{{$project ->project_description}}</p>
<p>{{$project->user->name}} </p>
<hr>
@endforeach
<hr>
<h2>Tasks</h2>
@foreach ($tasks as $task)
<p>{{$task ->task_name}}</p>
<p>{{$task ->task_description}}</p>
<hr>
@endforeach


@endsection