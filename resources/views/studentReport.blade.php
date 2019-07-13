@extends('layouts.anoApp')

@section('studentReport')
<table class="table table-condensed" style="font-size:10px; margin-left:-60px">
    <tr>
        <td>Image</td>
        <td>Registration</td>
        <td>Student Name</td>
        <td>Roll No</td>
        <td>Gender</td>
        <td>Course</td>
        <td>Year</td>
        <td>Semester</td>
        <td>Email</td>
        <td>Guardian's Name</td>
        <td>Father Phone Number</td>
        <td>Student Phone Number</td>
        <td>DOB</td>
        <td>City</td>
        <td>State</td>
        <td>Action</td>
    </tr>
    @foreach($data as $key=>$value)
        <tr>        
            <td><img src='public/uploads/highlights/{{$value->imgName}}' style="height:50px; width:50px;"/></td>
            <td style="color:red">{{$value->Registration}}</td>
            <td style="color:red">{{$value->studentName}}</td>
            <td style="color:red">{{$value->rollNo}}</td>
            <td style="color:red">{{$value->gender}}</td>
            <td style="color:red">{{$value->courses}}</td>
            <td style="color:red">{{$value->years}}</td>
            <td style="color:red">{{$value->semesters}}</td>
            <td style="color:red">{{$value->email}}</td>
            <td style="color:red">{{$value->fatherName}}</td>
            <td style="color:red">{{$value->faPhNum}}</td>
            <td style="color:red">{{$value->stPhNum}}</td>
            <td style="color:red">{{$value->stDOB}}</td>
            <td style="color:red">{{$value->city}}</td>
            <td style="color:red">{{$value->states}}</td>
            <td style="color:red"><a href="editStudent?registration={{$value->Registration}}">Edit</a>/<a href="deleteStudent?registration={{$value->Registration}}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
         </tr>
    @endforeach
</table>
@endsection