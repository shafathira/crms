<?php

namespace App\Http\Controllers;

use App\Models\MyRequest;
use App\Models\theRequested;
use Illuminate\Http\Request;

class TheRequestedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myRequests=MyRequest::all();
        return view('therequested.index', compact('myRequests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\theRequested  $theRequested
     * @return \Illuminate\Http\Response
     */
    public function show(MyRequest $myRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\theRequested  $theRequested
     * @return \Illuminate\Http\Response
     */
    public function edit(theRequested $theRequested)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\theRequested  $theRequested
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, theRequested $theRequested)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\theRequested  $theRequested
     * @return \Illuminate\Http\Response
     */
    public function destroy(theRequested $theRequested)
    {
        //
    }
}
