@extends('layouts.anoApp')

@section('addCourse')
<table class="table table-dark table-striped table-bordered">
        <form action="insertCourse" method="GET">
        <tr>
            <td>Enter a course</td><td><input type="text" name="course" /></td>
            <td><input type="submit" /></td>
        </tr>
    </form>
    </table>
@endsection