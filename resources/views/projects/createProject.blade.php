@extends('layouts.index')

@section('content')
    
<form action='/projects/create' method="post">
    @csrf
      <div class="form-group">
          <label for="exampleInputEmail1">Project Name</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="project_name" >
          <label for="exampleInputEmail1"> project description</label>

          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="project_description"  >
          
    
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection