@extends('layouts.anoApp')

@section('genderList')
<table class="table table-dark table-striped table-bordered">
        <tr>
            <td>S. No</td>
            <td>Gender</td>
        </tr>
        @foreach($data as $key=>$value)
        <tr>
            <td>{{++$loop->index}}</td>
            <td>{{$value->gender}}</td>
            <td><a href="editGender?id={{$value->id}}">Edit</a>/<a href="deleteGender?id={{$value->id}}">Delete</a>
        </tr>
        @endforeach
    </table>
@endsection