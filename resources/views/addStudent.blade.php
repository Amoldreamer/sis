@extends('layouts.anoApp')

@section('addStuent')
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
    <thead class="thead-light"><tr><td>ADD STUDENTS</td></tr></thead>
    
    <form method="POST" action="addStudentDetails" enctype="multipart/form-data">
        {{csrf_field()}}
        <tr>
       <td style="color:white">Student Name</td><td><input style="margin-left:40px" type="text" name="stName" /></td>
        </tr>        
            <td style="color:white">Roll Number</td><td><input style="margin-left:40px" type="number" name="rollName" /></td>
        </tr>
        <tr>
                
        <td style="color:white">Gender</td><td><select style="margin-left:40px" type="text" name="gender">
            <option value="" disabled selected>Select your option</option>
            @foreach($genders as $key=>$value)
            <option>{{$value->gender}}</option>
            @endforeach
        </select></td>
        
            </tr>
        <tr>
        <td style="color:white">Course</td><td><select style="margin-left:40px" type="text" name="course">
                <option value="" disabled selected>Select your option</option>
                @foreach($courses as $key=>$value)
            <option>{{$value->courses}}</option>
            @endforeach
            </select></td>
            </tr>
        <tr>
            <td style="color:white">Year</td><td><select style="margin-left:40px" type="text" name="year">
                    <option value="" disabled selected>Select your option</option>
                    @foreach($years as $key=>$value)
            <option>{{$value->years}}</option>
            @endforeach
                </select></td>
        </tr>
        <tr>
            <td style="color:white">Semester</td><td><select style="margin-left:40px" type="text" name="semester">
                    <option value="" disabled selected>Select your option</option>
                    @foreach($semesters as $key=>$value)
            <option>{{$value->semesters}}</option>
            @endforeach
                </select></td>
        </tr>
        <tr>
            <td style="color:white">Email</td><td><input style="margin-left:40px" type="text" name="email" /></td>
        </tr>
        <tr>
            <td style="color:white">Father Name</td><td><input style="margin-left:40px" type="text" name="faName"/></td>
            </tr>
        <tr>
            <td style="color:white">Mother Name</td><td><input style="margin-left:40px" type="text" name="moName"/></td>
            </tr>
        <tr>
            <td style="color:white">Family Phone Number</td><td><input style="margin-left:40px" type="text" name="faPhNo"/></td>
        </tr>
        <tr>
            <td style="color:white">Student Phone Number</td><td><input style="margin-left:40px" type="text" name="stPhNo"/></td>
        </tr>
        <tr>
            <td style="color:white">Student Date of Birth</td><td><input style="margin-left:40px" type="date" name="stDOB"/></td>
        </tr>
        <tr>
            <td style="color:white">State</td>
            <td>
        <select onChange="fetchCities(this.value)" name="state">
                <option value="" disabled selected>Select State</option>
                @foreach($states as $key=>$value)
                    <option>{{$value->states}}</option>
                @endforeach
        </select></td></tr>
    
        <tr>
            <td style="color:white">City</td>
            <td><select id="cities" name="city">
            <option>First Select State</option>
        </select></td></tr>
        <tr>
            <td style="color:white">Student Address</td><td><input style="margin-left:40px" type="text" name="stAddress"/></td>
        </tr>
        <tr>
            <td style="color:white">Image</td><td><input style="margin-left:40px" type="file" name="image"/></td>
        </tr>
        <tr>
            <td><input style="margin-left:100px" type="submit" style="color:red" /></td>
        </tr>
    </form>
</table>

</body>
@endsection