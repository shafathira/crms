<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Group;
use App\Models\MyRequest;
use App\Models\MyRequestBridge;
use App\Models\Programme;
use App\Models\Semester;
use PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $programmes=Programme::all();
        $myRequests=MyRequest::all();
        return view('myrequest.index', compact('myRequests','programmes'));
    }

    public function search(Request $request)
    {
        $programmes=Programme::where([
            ['programme_code','!=', Null],
            [function ($query) use ($request) {
                if (($term = $request->term)) {
                    $query->orWhere('programme_code','LIKE','%' . $term . '%')->get();
                }
            }]
        ])
        ->orderBy("id", "desc")
        ->paginate(10);
        $myRequests=MyRequest::all();
        // $myRequests=MyRequest::where('programme_id', $request->get('programme_id'))->get();
        return view('myrequest.index', compact('myRequests'));
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
        //MyRequest
        $myRequest = new MyRequest();
        $myRequest->Coor_id = Auth::id();
        $myRequest->programme_id = $request->get('programme_id');
        $myRequest->semester_id = $request->get('semester_id');
        $myRequest->group_id = $request->get('group_id');
        $myRequest->save();

        //MyRequestBridge
        $course_ids=$request->get('course_id');
        $lecture_hours=$request->get('lecture_hour');
        $tutorial_hours=$request->get('tutorial_hour');
        $lab_hours=$request->get('lab_hour');
        $student_numbers=$request->get('student_number');
        $lecturer_names=$request->get('lecturer_name');

        foreach ($course_ids as $key => $course_id) {

            $data=array(
                'bridge_id'=> $myRequest->id, //Semua records di MyRequestBridge akan diconnectkan melalui bridge_id.
                'course_id'=> $course_id,
                'lecture_hour'=> $lecture_hours[$key],
                'tutorial_hour'=> $tutorial_hours[$key],
                'lab_hour'=> $lab_hours[$key],
                'student_number'=> $student_numbers[$key],
                'lecturer_name'=> $lecturer_names[$key],
                'created_at'=> Carbon::now(), //carbon ni extension/helper for time&date in laravel
                'updated_at'=> Carbon::now(),
            );

            MyRequestBridge::insert($data);
        }

        return redirect()->route('coor_req')->with('success','Form successfuly submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MyRequest  $myRequest
     * @return \Illuminate\Http\Response
     */
    public function show(MyRequest $myRequest)
    {
        $myRequestBridge=MyRequestBridge::where('bridge_id',$myRequest->id)->get();
        return view('myrequest.show', compact('myRequest','myRequestBridge'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MyRequest  $myRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(MyRequest $myRequest)
    {
        $semesters=Semester::all();
        $groups=Group::all();
        $programmes=Programme::where('Coor_id',Auth::id())->get();
        $courses=Course::all();
        $myRequestBridge=MyRequestBridge::where('bridge_id',$myRequest->id)->get();

        return view('myrequest.edit', compact('semesters','programmes','groups', 'courses','myRequest', 'myRequestBridge'));
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

        $myRequest->programme_id = $request->get('programme_id');
        $myRequest->semester_id = $request->get('semester_id');
        $myRequest->group_id = $request->get('group_id');

        $myRequest->save();

        $bridge_ids=$request->get('bridge_id');
        $course_ids=$request->get('course_id');
        $lecture_hours=$request->get('lecture_hour');
        $tutorial_hours=$request->get('tutorial_hour');
        $lab_hours=$request->get('lab_hour');
        $student_numbers=$request->get('student_number');
        $lecturer_names=$request->get('lecturer_name');

        foreach ($bridge_ids as $key => $bridge_id) {

            $bridge=MyRequestBridge::find($bridge_id); // find record with id

                $bridge->course_id= $course_ids[$key];
                $bridge->lecture_hour= $lecture_hours[$key];
                $bridge->tutorial_hour= $tutorial_hours[$key];
                $bridge->lab_hour= $lab_hours[$key];
                $bridge->student_number= $student_numbers[$key];
                $bridge->lecturer_name= $lecturer_names[$key];

                $bridge->save();
        }

        return redirect()->route('coor_req')->with('success', 'Request updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MyRequest  $myRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyRequest $myRequest)
    {
        $myRequestBridge=MyRequestBridge::where('bridge_id',$myRequest->id)->get();
        foreach ($myRequest-> ids as $id) {

            $id->delete();
        }
        return redirect()->route('coor_req')->with('success','Deleted Successfuly');
    }

    public function generatePDF(MyRequest $myRequest)
    {
        $myRequestBridge=MyRequestBridge::where('bridge_id',$myRequest->id)->get();
        $data = [
            'myRequest' => $myRequest,
            'myRequestBridge' => $myRequestBridge
        ];
        $pdf = PDF::loadView('myrequest.generate_pdf',$data)->setPaper('a4', 'landscape');

        return $pdf->stream('requested_course.pdf');
    }
}
