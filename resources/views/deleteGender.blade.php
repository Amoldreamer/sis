@extends('layouts.anoApp')

@section('deleteGender')
<form action="finalDeleteGender" method="post">
        {{csrf_field()}}
    <table class="table table-dark table-striped table-bordered">
        <tr>
            <td>Gender</td>
        </tr>
        
        @foreach($data as $key=>$value)
        <tr>
            <input type="hidden" name="id" value="{{$value->id}}" />
            <td>{{$value->gender}}</td>
            <td><input type="submit" name="submit" value="Delete" /></td>        
        </tr>    
        @endforeach
    
    </table>
</form>
@endsection