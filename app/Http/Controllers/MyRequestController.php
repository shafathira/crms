<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Group;
use App\Models\MyRequest;
use App\Models\Programme;
use App\Models\Semester;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use PhpParser\Node\Stmt\Foreach_;

class MyRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myRequests=MyRequest::where('Coor_id',Auth::id())->get();
        return view('myrequest.index', compact('myRequests'));
    }

    public function showall()
    {
        $myRequests=MyRequest::all();
        return view('myrequest.showall', compact('myRequests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $semesters=Semester::all();
        $groups=Group::all();
        $users=Auth::user();
        $courses=Course::all();
        $programmes=Programme::where('Coor_id',Auth::id())->get(); //cara nk access orang yg tengah login (current user)
        return view('myrequest.create', compact('semesters','groups','users','programmes','courses'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //eliqouent
        // dd($request->all()); //dump&die (dump semua data dia pegang and dia matikan)
        // $myrequest=new MyRequest();
        // $myrequest->Coor_id=Auth::id();
        // $myrequest->programme_id=$request->get('programme_id');
        //etc etc
        // $myrequest->save();

//QueryBuilder
        $Coor_id=Auth::id(); //current person yg login
        $programme_id=$request->get('programme_id');
        $semester_id=$request->get('semester_id');
        $group_id=$request->get('group_id');



        $course_ids=$request->get('course_id');
        $lecture_hours=$request->get('lecture_hour');
        $tutorial_hours=$request->get('tutorial_hour');
        $lab_hours=$request->get('lab_hour');
        $student_numbers=$request->get('student_number');
        $lecturer_names=$request->get('lecturer_name');

        foreach ($course_ids as $key => $course_id) {
            $data=array(
                'Coor_id'=> $Coor_id,              //(column name => value yg kita dah get dekat atas)
                'programme_id'=> $programme_id,
                'semester_id'=> $semester_id,
                'group_id'=> $group_id,

                'course_id'=> $course_id,
                'lecture_hour'=> $lecture_hours[$key],
                'tutorial_hour'=> $tutorial_hours[$key],
                'lab_hour'=> $lab_hours[$key],
                'student_number'=> $student_numbers[$key],
                'lecturer_name'=> $lecturer_names[$key],
                'created_at'=> Carbon::now(), //carbon ni extension/helper for time&date in laravel
                'updated_at'=> Carbon::now(),

            );

            MyRequest::insert($data);
        }

        return redirect()->route('myrequests.index')->with('success','Form successfuly submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MyRequest  $myRequest
     * @return \Illuminate\Http\Response
     */
    public function show(MyRequest $myRequest)
    {

        return view('myrequest.show', compact('myRequest'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MyRequest  $myRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(MyRequest $myRequest)
    {
        $groups=Group::all();
        $courses=Course::all();

        return view('myrequest.edit', compact('groups', 'courses', 'myRequest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MyRequest  $myRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyRequest $myRequest)
    {
        $myRequest->groups->group_code = $request->get('group_code');
        $myRequest->courses->course_code = $request->get('course_code');
        $myRequest->courses->course_name = $request->get('course_name');
        $myRequest->courses->credit_hour = $request->get('credit_hour');

        $myRequest->lecture_hour = $request->get('lecture_hour');
        $myRequest->tutorial_hour = $request->get('tutorial_hour');
        $myRequest->lab_code = $request->get('lab_code');
        $myRequest->student_number = $request->get('student_number');
        $myRequest->lecturer_name = $request->get('lecturer_name');

        $myRequest->save();
        return redirect()->route('myrequests.index')->with('success', 'Course updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MyRequest  $myRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyRequest $myRequest)
    {
        $myRequest->delete();

        return redirect()->route('myrequests.index')->with('success','Deleted Successfuly');
    }
}
