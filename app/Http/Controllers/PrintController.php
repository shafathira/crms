<?php

namespace App\Http\Controllers;

use App\Models\MyRequest;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrintController extends Controller
{
    public function index()
    {
        $requested_data = $this->get_requested_data();
        return view('generate_pdf');
    }

    public function get_requested_data()
    {
        $requested_data = DB::table('my_requests')->get();
        return $requested_data;
    }
    // public function generatePDF()
    // {
    //     $data = MyRequest::all();

    //     $pdf = PDF::loadView('generate_pdf', $data);


    //     return $pdf->stream('requested_courses.pdf');
    // }
}
