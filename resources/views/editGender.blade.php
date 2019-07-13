@extends('layouts.anoApp')

@section('editGender')
<form action="finalEditGender" method="post">
        {{csrf_field()}}
    <table class="table table-dark table-striped table-bordered">
        <tr>
            <td>Gender</td>
        </tr>
        
        @foreach($data as $key=>$value)
        <tr>
            <input type="hidden" name="id" value="{{$value->id}}" />
            <td><input type="text" value='{{$value->gender}}' name="gender" /></td>
            <td><input type="submit" name="submit" value="Edit" /></td>
        
        </tr>
    
        @endforeach
    
    </table>
</form>
@endsection