{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Agency - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="{{URL::asset('public/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{URL::asset('public/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{URL::asset('public/css/agency.min.css')}}" rel="stylesheet">
  <style>
    .dropbtn {
  /* background-color: transparent; */
  color: white;
  /* padding: 16px;
  font-size: 16px;
  border: none;*/
  cursor: pointer; 
}

/* Dropdown button on hover & focus */
/* .dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
} */

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
    </style>

</head>

<body id="page-top" style="background-color:gray">

  <!-- Navigation -->
  <nav class=" navbar-expand-lg navbar-dark fixed-top bg-dark" id="mainNav">
    <div class="container">
      
      <a class="navbar-brand js-scroll-trigger" href="home">Student Information System</a>                
      <form action="searchStudent" method="GET" class="navbar-form form-group" style="float:right ">
        {{csrf_field()}}
          <input type="text" name="search" placeholder="search" style="width:200px; height:35px;border-radius:6px">
        <input type="submit" class="btn btn-danger" value="Submit" />
      </form>
      
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse " id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="welcome1">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="aboutus1">About Us</a>
          </li>
          <li class="dropdown nav-item">
              <a onclick="myFunction()" class="dropbtn nav-link js-scroll-trigger" >Admin</a>
              <div id="myDropdown" class="dropdown-content">
                <a href="addGender">Add Gender</a>
                <a href="addCourse">Add Course</a>
                <a href="addYear">Add Year</a>
                <a href="addSemester">Add Semester</a>
                <a href="addState">Add State</a>
                <a href="viewGender">View Gender</a>
                <a href="viewCourse">View Course</a>
                <a href="viewYear">View Year</a>
                <a href="viewSemester">View Semester</a>
              </div>
          </li>
          <li class="dropdown nav-item">
              <a onclick="myFunction1()" class="dropbtn nav-link js-scroll-trigger" >Student Management</a>
              <div id="myDropdown1" class="dropdown-content">
                <a href="addStudent">Add Student</a>
                <a href="studentReport">Student Report</a>
                <a href="#">Student Listing</a>
                <a href="viewStudent">View Student</a>
              </div>
          </li>
          <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
          </li>          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container" style="margin-top:-100px">
      <div class="intro-text">
            @section('welcome')
            @show  
            @section('aboutus')
            @section('content')
            @show
            @section('addStuent')
            @show
            @section('showStudents')
            @show
            @section('showIndividualStudent')
            @show
            @section('studentReport')
            @show
            @section('editStudent')
            @show
            @section('addGender')
            @show
            @section('genderList')
            @show
            @section('addCourse')
            @show
            @section('courseList')
            @show
            @section('addYear')
            @show
            @section('yearList')
            @show
            @section('addSemester')
            @show
            @section('addState')
            @show
            @section('semesterList')
            @show
            @section('stateList')
            @show
            @section('viewGender')
            @show
            @section('viewCourse')
            @show
            @section('viewYear')
            @show
            @section('viewSemester')
            @show
            @section('editGender')
            @show
            @section('deleteGender')
            @show
            @section('editCourse')
            @show
            @section('viewStudent')
            @show
            @section('searchStudent')
            @show   
      </div>
    </div>
  </header>

  <!-- Bootstrap core JavaScript -->
  <script src="{{URL::asset('public/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{URL::asset('public/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Contact form JavaScript -->
  <script src="{{URL::asset('public/js/jqBootstrapValidation.js')}}"></script>
  <script src="{{URL::asset('public/js/contact_me.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{URL::asset('public/js/agency.min.js')}}"></script>
  <script type="text/javascript">
    function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
function myFunction1() {
  document.getElementById("myDropdown1").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
  </script>

</body>

</html>

