@extends('layouts.index')

@section('content')

@foreach ($users as $user)
<a href="/projects/create" class="btn btn-success">Create Project</a>
<p>{{$user ->name}}</p>
<p>{{$user ->email}}</p>
@endforeach

@foreach ($projects as $project)
<a href="/tasks/create" class="btn btn-success">Add Tasks</a>
<p>{{$project ->project_name}}</p>
<p>{{$project ->project_description}}</p>
<p>{{$project->user_id}} </p>
@endforeach

@foreach ($tasks as $task)
<p>{{$task ->task_name}}</p>
<p>{{$task ->task_description}}</p>
@endforeach


@endsection