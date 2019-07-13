@extends('layouts.app')

@section('allStudents')
    @foreach($data as $key=>$value)
    
    <a href="showIndividualStudent1?registration={{$value->Registration}}"><figure style="float:left">
        <img src='public/uploads/highlights/{{$value->imgName}}' style="height:200px;width:200px;" />
        <figcaption style="color:black">{{$value->studentName}}</figcaption>
    </figure>
</a>
    @endforeach
@endsection