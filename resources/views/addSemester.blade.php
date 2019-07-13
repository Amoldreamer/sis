@extends('layouts.anoApp')

@section('addSemester')
    <table class="table table-dark table-striped table-bordered">
        <form action="insertSemester" method="GET">
        <tr>
            <td>Enter a semester</td><td><input type="text" name="semester" /></td>
            <td><input type="submit" /></td>
        </tr>
    </form>
    </table>
@endsection