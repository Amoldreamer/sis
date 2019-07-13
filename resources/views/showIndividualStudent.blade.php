@extends('layouts.anoApp')

@section('showIndividualStudent')
@foreach($data as $key=>$value)
    
    <figure>
        <img src='public/uploads/highlights/{{$value->imgName}}' style="height:400px;width:400px;" />
        <figcaption>{{$value->studentName}}<br>{{$value->gender}}<br>
            {{$value->courses}}<br>
            {{$value->email}}<br>
            {{$value->stDOB}}<br>
            {{$value->city}}<br></figcaption>
    </figure>

    @endforeach
@endsection