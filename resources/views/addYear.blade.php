@extends('layouts.anoApp')


@section('addYear')
    <table class="table table-dark table-striped table-bordered">
        <form action="insertYear" method="GET">
        <tr>
            <td>Enter a year</td><td><input type="text" name="year" /></td>
            <td><input type="submit" /></td>
        </tr>
    </form>
    </table>
@endsection