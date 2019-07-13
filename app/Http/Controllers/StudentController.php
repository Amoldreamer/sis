<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    public function aboutus(){
        return view('aboutus');
    }

    public function aboutus1(){
        return view('aboutus1');
    }

    public function welcome1(){
        return view('welcome1');
    }

    public function addStudent(){
        $genders = DB::table('genders')->get();
        $courses = DB::table('courses')->get();
        $years = DB::table('years')->get();
        $semesters = DB::table('semesters')->get();
        $states = DB::table('states')->get();
                
        return view('addStudent',compact('genders','courses','years','semesters','states'));
    }

    public function addStudentDetails(Request $request){
        
        $gender = DB::table('genders')->where(['gender'=>$request->gender])->get();
        foreach($gender as $key=>$value){
            $genderid = $value->id;
        };
        $course = DB::table('courses')->where(['courses'=>$request->course])->get();
        foreach($course as $key=>$value){
            $courseid = $value->id;
        };
        $year = DB::table('years')->where(['years'=>$request->year])->get();
        foreach($year as $key=>$value){
            $yearid = $value->id;
        };
        $semester = DB::table('semesters')->where(['semesters'=>$request->semester])->get();
        foreach($semester as $key=>$value){
            $semesterid = $value->id;
        };

        $state = DB::table('states')->where(['states'=>$request->state])->get();
        foreach($state as $key=>$value){
            $stateid = $value->id;
        };
        
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('public/uploads/highlights/',$fileName);
        }
        do {
            $reference_id = mt_rand( 100000, 999999 );
         } while ( DB::table( 'students' )->where( 'Registration', $reference_id )->exists() );
        
        DB::table('students')->insert(['Registration'=>$reference_id,'studentName'=>$request->stName,'rollNo'=>$request->rollName,'gender_id'=>$genderid,
        'course_id'=>$courseid,'year_id'=>$yearid,'seme_id'=>$semesterid,'email'=>$request->email,'fatherName'=>$request->faName,'motherName'=>$request->moName,'faPhNum'=>$request->faPhNo,
        'stPhNum'=>$request->stPhNo,'stDOB'=>$request->stDOB,'city'=>$request->city,'state_id'=>$stateid,'stAddress'=>$request->stAddress,
        'imgName'=>$fileName]);

        $data = DB::table('students')
        ->join('genders','students.gender_id','=','genders.id')
        ->join('courses','students.course_id','=','courses.id')
        ->join('years','students.year_id','=','years.id')
        ->join('semesters','students.seme_id','=','semesters.id')
        ->select('students.*','genders.*','courses.*','years.*','semesters.*')
        ->get();
        
        return view('showStudents',compact('data'));
    }

    public function editStudentDetails(Request $request){
        
        $gender = DB::table('genders')->where(['gender'=>$request->gender])->get();
        foreach($gender as $key=>$value){
            $genderid = $value->id;
        };
        $course = DB::table('courses')->where(['courses'=>$request->course])->get();
        foreach($course as $key=>$value){
            $courseid = $value->id;
        };
        $year = DB::table('years')->where(['years'=>$request->year])->get();
        foreach($year as $key=>$value){
            $yearid = $value->id;
        };
        $semester = DB::table('semesters')->where(['semesters'=>$request->semester])->get();
        foreach($semester as $key=>$value){
            $semesterid = $value->id;
        };
        $states = DB::table('states')->where(['states'=>$request->state])->get();
        foreach($states as $key=>$value){
            $stateid = $value->id;
        };
        
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('public/uploads/highlights/',$fileName);
        }
        
        DB::table('students')->where(['Registration'=>$request->registration])->update(['Registration'=>$request->registration,'studentName'=>$request->stName,'rollNo'=>$request->rollName,'gender_id'=>$genderid,
        'course_id'=>$courseid,'year_id'=>$yearid,'seme_id'=>$semesterid,'email'=>$request->email,'fatherName'=>$request->faName,'motherName'=>$request->moName,'faPhNum'=>$request->faPhNo,
        'stPhNum'=>$request->stPhNo,'stDOB'=>$request->stDOB,'city'=>$request->city,'state_id'=>$stateid,'stAddress'=>$request->stAddress,
        'imgName'=>$fileName]);

        $data = DB::table('students')
        ->join('genders','students.gender_id','=','genders.id')
        ->join('courses','students.course_id','=','courses.id')
        ->join('years','students.year_id','=','years.id')
        ->join('semesters','students.seme_id','=','semesters.id')
        ->select('students.*','genders.*','courses.*','years.*','semesters.*')
        ->get();
        
        return view('showStudents',compact('data'));
    }


    public function showIndividualStudent(Request $request){
        
        $data = DB::table('students')->where(['students.Registration'=>$request->registration])
        ->join('genders','students.gender_id','=','genders.id')
        ->join('courses','students.course_id','=','courses.id')
        ->join('years','students.year_id','=','years.id')
        ->join('semesters','students.seme_id','=','semesters.id')
        ->select('students.*','genders.*','courses.*','years.*','semesters.*')
        ->get();

        return view('showIndividualStudent',compact('data'));
    }

    public function studentReport(){
        $data = DB::table('students')
        ->join('genders','students.gender_id','=','genders.id')
        ->join('courses','students.course_id','=','courses.id')
        ->join('years','students.year_id','=','years.id')
        ->join('semesters','students.seme_id','=','semesters.id')
        ->join('states','students.state_id','=','states.id')
        ->select('students.*','genders.*','courses.*','years.*','semesters.*','states.*')
        ->get();
        
        return view('studentReport',compact('data'));
    }

    public function editStudent(Request $request){
        $data = DB::table('students')->where(['students.Registration'=>$request->registration])
        ->join('genders','students.gender_id','=','genders.id')
        ->join('courses','students.course_id','=','courses.id')
        ->join('years','students.year_id','=','years.id')
        ->join('semesters','students.seme_id','=','semesters.id')
        ->join('states','students.state_id','=','states.id')
        ->select('students.*','genders.*','courses.*','years.*','semesters.*','states.*')
        ->get();

        foreach($data as $key=>$value){
        $gender = DB::table('genders')
        ->whereNotIn('genders.id',[$value->gender_id])
        ->get();
        $course = DB::table('courses')
        ->whereNotIn('courses.id',[$value->course_id])
        ->get();
        $year = DB::table('years')
        ->whereNotIn('years.id',[$value->year_id])
        ->get();
        $seme = DB::table('semesters')
        ->whereNotIn('semesters.id',[$value->seme_id])
        ->get();
        $state = DB::table('states')
        ->whereNotIn('states.id',[$value->state_id])
        ->get();
        }
        
        return view('editStudent',compact('data','gender','course','year','seme','state'));
    }

    public function addGender(){
        return view('addGender');
    }

    public function addCourse(){
        return view('addCourse');
    }

    public function addYear(){
        return view('addYear');
    }

    public function addSemester(){
        return view('addSemester');
    }

    public function addState(){
        return view('addState');
    }

    public function insertGender(Request $request){
        DB::table('genders')->insert(['gender'=>$request->gender]);
        $data = DB::table('genders')->get();

        return view('genderList',compact('data'));
    }

    public function insertCourse(Request $request){
        DB::table('courses')->insert(['courses'=>$request->course]);
        $data = DB::table('courses')->get();

        return view('courseList',compact('data'));
    }

    public function insertYear(Request $request){
        DB::table('years')->insert(['years'=>$request->year]);
        $data = DB::table('years')->get();

        return view('yearList',compact('data'));
    }

    public function insertSemester(Request $request){
        DB::table('semesters')->insert(['semesters'=>$request->semester]);
        $data = DB::table('semesters')->get();

        return view('semesterList',compact('data'));
    }

    public function insertState(Request $request){
        DB::table('states')->insert(['states'=>$request->state]);
        $data = DB::table('states')->get();

        return view('stateList',compact('data'));
    }

    public function viewGender(Request $request){
        $data = DB::table('genders')->get();

        return view('genderList',compact('data'));
    }

    public function viewCourse(Request $request){
        $data = DB::table('courses')->get();

        return view('courseList',compact('data'));
    }

    public function viewYear(Request $request){
        $data = DB::table('years')->get();

        return view('yearList',compact('data'));
    }

    public function viewSemester(Request $request){
        $data = DB::table('semesters')->get();

        return view('semesterList',compact('data'));
    }

    public function editGender(Request $request){
        $data = DB::table('genders')->where(['id'=>$request->id])->get();
        
        return view('editGender',compact('data'));
    }

    public function deleteGender(Request $request){
       $data = DB::table('genders')->where(['id'=>$request->id])->get();

        return view('deleteGender',compact('data'));
    }

    public function finalEditGender(Request $request){
        DB::table('genders')->where(['id'=>$request->id])->update(['gender'=>$request->gender]);
        $data = DB::table('genders')->get();

        return view('genderList',compact('data'));
    }

    public function finalDeleteGender(Request $request){
        DB::table('students')->where(['gender_id'=>$request->id])->delete();
        DB::table('genders')->where(['id'=>$request->id])->delete();
        
        $data = DB::table('genders')->get();

        return view('genderList',compact('data'));
    }

    public function editCourse(Request $request){
        $data = DB::table('courses')->where(['id'=>$request->id])->get();
        return view('editCourse',compact('data'));
    }

    public function finalEditCourse(Request $request){
        DB::table('courses')->where(['id'=>$request->id])->update(['courses'=>$request->course]);
        $data = DB::table('courses')->get();

        return view('courseList',compact('data'));
    }


    public function deleteCourse(Request $request){
        DB::table('students')->where(['course_id'=>$request->id])->delete();
        DB::table('courses')->where(['id'=>$request->id])->delete();
        $data = DB::table('courses')->get();

        return view('courseList',compact('data'));
    }

    public function allStudents(Request $request){

        $data = DB::table('students')
        ->join('genders','students.gender_id','=','genders.id')
        ->join('courses','students.course_id','=','courses.id')
        ->join('years','students.year_id','=','years.id')
        ->join('semesters','students.seme_id','=','semesters.id')
        ->select('students.*','genders.*','courses.*','years.*','semesters.*')
        ->get();
        
        
        return view('allStudents',compact('data'));
    }

    public function viewStudent(Request $request){

        $data = DB::table('students')
        ->join('genders','students.gender_id','=','genders.id')
        ->join('courses','students.course_id','=','courses.id')
        ->join('years','students.year_id','=','years.id')
        ->join('semesters','students.seme_id','=','semesters.id')
        ->select('students.*','genders.*','courses.*','years.*','semesters.*')
        ->get();
        
        return view('viewStudent',compact('data'));
    }

    public function showIndividualStudent1(Request $request){
        
        $data = DB::table('students')->where(['students.Registration'=>$request->registration])
        ->join('genders','students.gender_id','=','genders.id')
        ->join('courses','students.course_id','=','courses.id')
        ->join('years','students.year_id','=','years.id')
        ->join('semesters','students.seme_id','=','semesters.id')
        ->select('students.*','genders.*','courses.*','years.*','semesters.*')
        ->get();

        return view('showIndividualStudent1',compact('data'));
    }

    public function deleteStudent(Request $request){
        DB::table('students')->where(['students.Registration'=>$request->registration])->delete();

        $data = DB::table('students')
        ->join('genders','students.gender_id','=','genders.id')
        ->join('courses','students.course_id','=','courses.id')
        ->join('years','students.year_id','=','years.id')
        ->join('semesters','students.seme_id','=','semesters.id')
        ->join('states','students.state_id','=','states.id')
        ->select('students.*','genders.*','courses.*','years.*','semesters.*','states.*')
        ->get();
        
        return view('studentReport',compact('data'));
    }

    public function searchStudent(Request $request){
        $data = DB::table('students')->where('students.studentName','LIKE','%'.$request->search.'%')->paginate(10);
        
        return view('searchStudent',compact('data'));
    }
}
