@extends('layouts.index')

@section('content')
    
<form action='/tasks' method="post" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
          <label for="exampleInputEmail1">task Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="task_name" >
          <label for="exampleInputEmail1"> task description</label>
          <input type="text" class="form-control" id="exampleInputEmail1"  name="task_description"  >

        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
