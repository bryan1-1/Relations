@extends('layouts.index')

@section('content')
    <h1>Create Project</h1>
<form action='/tasks' method="post" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
          <label for="exampleInputEmail1">task Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="task_name" >
          <label for="exampleInputEmail1"> task description</label>
          <input type="text" class="form-control" id="exampleInputEmail1"  name="task_description"  >

          <select name="project_id" id="project_id">
            @foreach ($projects as $project)
        <option value="{{$project->id}}">{{$project->project_name}}</option>
            @endforeach
        </select>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
