@extends('layouts.anoApp')

@section('searchStudent')
    <table class="table table-dark table-striped table-bordered">
        <tr>
            <td>Student Name</td>
        </tr>
        @foreach($data as $key=>$value)
        <tr>
            <td><a href="showIndividualStudent?registration={{$value->Registration}}">{{$value->studentName}}</a></td>
        </tr>
        @endforeach
    </table>
@endsection