@extends('layouts.anoApp')

@section('addState')
    <table class="table table-dark table-striped table-bordered">
        <form action="insertState" method="GET">
        <tr>
            <td>Enter a state</td><td><input type="text" name="state" /></td>
            <td><input type="submit" /></td>
        </tr>
    </form>
    </table>
@endsection