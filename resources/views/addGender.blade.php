@extends('layouts.anoApp')

@section('addGender')
    <table class="table table-dark table-striped table-bordered">
        <form action="insertGender" method="GET">
        <tr>
            <td>Enter a gender</td><td><input type="text" name="gender" /></td>
            <td><input type="submit" /></td>
        </tr>
    </form>
    </table>
@endsection