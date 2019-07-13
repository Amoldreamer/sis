@extends('layouts.anoApp')

@section('viewStudent')
<div class="text-center">
        
@foreach($data as $key=>$value)

<a href="showIndividualStudent?id={{$value->id}}" ><figure style="float:left" >
    <img src='public/uploads/highlights/{{$value->imgName}}' style="height:200px;width:200px;" />&nbsp&nbsp
    <figcaption style="color:black">{{$value->studentName}}</figcaption>
</figure>
</a>


@endforeach

</div>
<div class="footer" style="position: fixed;
left: 0;
bottom: 0;
width: 100%;
height:100px;
background-color: rgb(31, 32, 33);">
      </div>
@endsection