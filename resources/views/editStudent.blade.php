@extends('layouts.anoApp')

@section('editStudent')
@foreach($data as $k=>$v)
<head>
    <script>
            function fetchCities(str)
        {
        var req=new XMLHttpRequest();
        req.open('get','cities?state='+str,true);
        req.send();
        req.onreadystatechange=function(){
            if(req.readyState == 4 && req.status==200)
            {
                document.getElementById('cities').innerHTML=req.responseText;
            }
        };
        }
    </script>
</head>
<body>
<table class="table table-dark table-striped table-bordered">
    
        <form method="POST" action="editStudentDetails" enctype="multipart/form-data">
            {{csrf_field()}}
            <tr>
                    
           <td style="color:white">Student Name</td><td>
                <input style="margin-left:40px" type="text" name="stName" value={{$v->studentName}} /></td>
        </tr>
            <tr>
                <td style="color:white">Roll Number</td><td><input style="margin-left:40px" type="text" name="rollName" value={{$v->rollNo}} /></td>
            </tr>
            <tr>
            <td style="color:white">Gender</td><td><select style="margin-left:40px" type="text" name="gender">
                <option>{{$v->gender}}</option>
                @foreach($gender as $key=>$value)
                <option>{{$value->gender}}</option>
                @endforeach
            </select></td>
                </tr>
            <tr>
            <td style="color:white">Course</td><td><select style="margin-left:40px" type="text" name="course">
                    <option>{{$v->courses}}</option>
                    @foreach($course as $key=>$value)
                <option>{{$value->courses}}</option>
                @endforeach
                </select></td>
                </tr>
            <tr>
                <td style="color:white">Year</td><td><select style="margin-left:40px" type="text" name="year">
                        <option>{{$v->years}}</option>
                        @foreach($year as $key=>$value)
                <option>{{$value->years}}</option>
                @endforeach
                    </select></td>
            </tr>
            <tr>
                <td style="color:white">Semester</td><td><select style="margin-left:40px" type="text" name="semester">
                        <option>{{$v->semesters}}</option>
                        @foreach($seme as $key=>$value)
                <option>{{$value->semesters}}</option>
                @endforeach
                    </select></td>
            </tr>
            <tr>
                <td style="color:white">Email</td><td><input style="margin-left:40px" type="text" name="email" value={{$v->email}} /></td>
            </tr>
            <tr>
                <td style="color:white">Father Name</td><td><input style="margin-left:40px" type="text" name="faName" value={{$v->fatherName}} /></td>
                </tr>
            <tr>
                <td style="color:white">Mother Name</td><td><input style="margin-left:40px" type="text" name="moName" value={{$v->motherName}} /></td>
                </tr>
            <tr>
                <td style="color:white">Family Phone Number</td><td><input style="margin-left:40px" type="text" name="faPhNo" value={{$v->faPhNum}} /></td>
            </tr>
            <tr>
                <td style="color:white">Student Phone Number</td><td><input style="margin-left:40px" type="text" name="stPhNo" value={{$v->stPhNum}} /></td>
            </tr>
            <tr>
                <td style="color:white">Student Date of Birth</td><td><input style="margin-left:40px" type="text" name="stDOB" value={{$v->stDOB}} /></td>
            </tr>
            <tr>
                <td style="color:white">State</td>
                <td>
            <select onChange="fetchCities(this.value)" name="state">
                <option>{{$v->states}}</option>
                @foreach($state as $key=>$value)
                <option>{{$value->states}}</option>
                @endforeach
            </select></td></tr>
        
            <tr>
                <td style="color:white">City</td>
                <td><select id="cities" name="city">
                <option>{{$v->city}}</option>
            </select></td></tr>
            <tr>
                <td style="color:white">Student Address</td><td><input style="margin-left:40px" type="text" name="stAddress" value={{$v->stAddress}} /></td>
            </tr>
            <tr>
                <td style="color:white">Image</td><td><input style="margin-left:40px" type="file" name="image"/></td>
            </tr>
            <tr>
                <td><input style="margin-left:100px" type="submit" style="color:red" /></td>
            </tr>
            <input type="hidden" name="registration" value={{$v->Registration}} />
        </form>
    </table>
    @endforeach
</body>
@endsection