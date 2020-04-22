@extends('layouts.index')

@section('content')

@foreach ($users as $user)
<p>{{$user -> name}}</p>
<p>{{$user -> email}}</p>
@endforeach

@foreach ($projects as $project)
<p>{{$project -> project_name}}</p>
<p>{{$project -> project_description}}</p>
@endforeach

@foreach ($tasks as $task)
<p>{{$task -> task_name}}</p>
<p>{{$task -> task_description}}</p>
@endforeach


@endsection