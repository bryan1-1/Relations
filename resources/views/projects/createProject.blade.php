@extends('layouts.index')

@section('content')
    <h1>Create Project</h1>
<form action="/projects" method="post" enctype="multipart/form-data">
  @csrf
 
  <input  value="description" type="text" name="project_description" id="">
  <input  value="name" type="text" name="project_name" id="">
  <button type="submit">submit</button>
 <div class="form-group">
     <label for="">users</label>
     <select name="user_id" id="user_id">
         @foreach ($users as $user)
     <option value="{{$user->id}}">{{$user->name}}</option>
         @endforeach
     </select>
 </div>
</form>
@endsection