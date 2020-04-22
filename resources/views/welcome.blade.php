@extends('layouts.index')

@section('content')
<a href="/projects/create" class="btn btn-success">Create Project</a>
@foreach ($users as $user)
<p>{{$user ->name}}</p>
<p>{{$user ->email}}</p>
<hr>
@endforeach
<hr>
<a href="/tasks/create" class="btn btn-success">Add Tasks</a>
@foreach ($projects as $project)
<p>{{$project ->project_name}}</p>
<p>{{$project ->project_description}}</p>
<p>{{$project->user_id}} </p>
<hr>
@endforeach
<hr>
@foreach ($tasks as $task)
<p>{{$task ->task_name}}</p>
<p>{{$task ->task_description}}</p>
<hr>
@endforeach


@endsection