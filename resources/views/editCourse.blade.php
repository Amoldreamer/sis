@extends('layouts.anoApp')

@section('editCourse')
<form action="finalEditCourse" method="post">
    {{csrf_field()}}
<table class="table table-dark table-striped table-bordered">
    <tr>
        <td>Course</td>
    </tr>
    
    @foreach($data as $key=>$value)
    <tr>
        <td><input type="text" value="{{$value->courses}}" name="course" /></td>
        <input type="hidden" name="id" value="{{$value->id}}" />
        <td><input type="submit" name="submit" value="Edit" /></td>
    
    </tr>

    @endforeach

</table>
</form>
@endsection