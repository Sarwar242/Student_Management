@extends('master');
@section('content')
        <table class="table table-responsive table-hover">
            <th>#SN</th>
            <th>Name</th>
            <th>Reg_Id</th>
            <th>Department Name</th>
            <th>Info</th>
            <th>Action</th>
            @php
               $i=0;
            @endphp
        @foreach ($students as $student)
        @php
               $i++;
            @endphp
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->reg_id}}</td>
            <td>{{$student->department_name}}</td>
            <td>{{$student->info}}</td>
            <td>
                <a href="{{route('edit',$student->id)}}" class="btn btn-success">Edit</a>
                <form action="{{route('delete',$student->id)}}" method="POST">
                    {{csrf_field()}}
                    <input type="submit" class="btn btn-danger" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
        </table>
   @endsection
