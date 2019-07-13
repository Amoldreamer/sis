@extends('layouts.anoApp')

@section('courseList')
    <table class="table table-dark table-striped table-bordered">
        <tr>
            <td>S. No</td>
            <td>Course</td>
        </tr>
        @foreach($data as $key=>$value)
        <tr>
            <td>{{++$loop->index}}</td>
            <td>{{$value->courses}}</td>
            <td><a href="editCourse?id={{$value->id}}">Edit</a>/<a href="deleteCourse?id={{$value->id}}">Delete</a>
        </tr>
        @endforeach
    </table>
@endsection