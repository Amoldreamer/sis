@extends('layouts.anoApp')

@section('semesterList')
    <table class="table table-dark table-striped table-bordered">
        <tr>
            <td>S. No</td>
            <td>Year</td>
        </tr>
        @foreach($data as $key=>$value)
        <tr>
            <td>{{++$loop->index}}</td>
            <td>{{$value->semesters}}</td>
        </tr>
        @endforeach
    </table>
@endsection