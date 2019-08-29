@extends('master');
@section('title')
    Create Student | Student Management
@endsection
@section('content')
    <h2 class="header">Create New Student</h2>
<form class="form-horizontal" action="{{route('store')}}" method="post" data-parsley-validate>
    {{csrf_field()}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </ul>
    </div>
@endif


  <div class="form-group">
    <label for="reg_id">Registration ID:</label>
    <input type="text" name="reg_id" class="form-control" id="reg_id">
  </div>
  <div class="form-group">
    <label for="name">Student Name:</label>
    <input type="text" name="name" class="form-control" id="name" required>
  </div>
  <div class="form-group">
    <label for="department_name">Department Name:</label>
    <input type="text" name="department_name" class="form-control"
    id="department_name" required>
  </div>
  <div class="form-group">
    <label for="info">Student Info:</label>
    <input type="text" name="info" class="form-control" id="info" required>
  </div>

  <button type="submit" class="btn btn-default">Register Student</button>
</form>
@endsection
