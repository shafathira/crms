<?php

namespace App\Http\Controllers;

use App\Models\MyRequest;
use App\Models\Programme;
use App\Models\User;
use PDF;
use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $programmes = Programme::where([
            ['programme_code','!=', Null],
            [function ($query) use ($request) {
                if (($term = $request->term)) {
                    $query->orWhere('programme_code','LIKE','%' . $term . '%')->get();
                }
            }]
        ])
        ->orderBy("id", "desc")
        ->paginate(10);

        return view('programme.index', compact('programmes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coordinators = User::where('role_id',2)->get(); //kita dah dapat
        return view('programme.create',compact('coordinators')); //ni kita nk pass
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $programme = new Programme();
        $programme->programme_code = $request->get('programme_code');
        $programme->programme_name = $request->get('programme_name');
        $programme->Coor_id = $request->get('Coor_id');
        $programme->save();

        return redirect()->route('programmes.index')->with('success','Programme successfuly added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function show(Programme $programme)
    {
        return view('programme.show', compact('programme'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function edit(Programme $programme)
    {
        $coordinators = User::where('role_id',2)->get(); //kita dah dapat
        return view('programme.edit', compact('programme','coordinators')); //ni nk pass
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programme $programme)
    {
        $programme->programme_code = $request->get('programme_code');
        $programme->programme_name = $request->get('programme_name');
        $programme->Coor_id = $request->get('Coor_id');
        $programme->save();

        return redirect()->route('programmes.index')->with('success','Programme successfuly updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programme $programme)
    {
        $programme->delete();

        return redirect()->route('programmes.index')->with('success','Program successfuly deleted');
    }

    public function search()
    {
        $search_text = $_GET['query'];
        $myRequests = MyRequest::all();
        $programmes = Programme::where('programme_code','LIKE','%'.$search_text. '%')->get();

        return view('programme.search',compact('programmes','myRequests'));
    }


}
