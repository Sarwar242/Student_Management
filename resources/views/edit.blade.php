@extends('master');
@section('title')
    Edit Student Info | Edit Management
@endsection
@section('content')
    <h2 class="header">Update Student</h2>
<form class="form-horizontal" action="{{route('update',$student->id)}}" method="post">
    {{csrf_field()}}
  <div class="form-group">
    <label for="reg_id">Registration ID:</label>
    <input type="text" name="reg_id" class="form-control" id="reg_id"  value="{{$student->reg_id}}">
  </div>
  <div class="form-group">
    <label for="name">Student Name:</label>
    <input type="text" name="name" class="form-control" id="name"  value="{{$student->name}}">
  </div>
  <div class="form-group">
    <label for="department_name">Department Name:</label>
    <input type="text" name="department_name" class="form-control" id="department_name"  value="{{$student->department_name}}">
  </div>
  <div class="form-group">
    <label for="info">Student Info:</label>
    <textarea type="text" name="info" class="form-control" id="info"
    rows="10">{!!$student->info!!}</textarea>


  </div>

  <button type="submit" class="btn btn-default">Register Student</button>
</form>
@endsection
