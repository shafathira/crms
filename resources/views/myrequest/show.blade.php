@extends('layouts.app')

@section('content')
<div class="container mt-4" >
    @include('partials.message')
    <h5 class='text-center'>FAKULTI SAINS KOMPUTER DAN MATEMATIK </h5>
                <h6 class='text-center'>BORANG PERMOHONAN KURSUS</h6>
        <br><br>

            @csrf
            <table class="table table-bordered mb-4" style="border-color:rgb(61, 56, 66)">

                <tbody>
                    <tr>
                        <td>Coordinator Name</td>
                        <td><span>{{ $myRequest->coordinators->name }}</span></td>
                    </tr>

                    <tr>
                        <td>Program</td>
                        <td>
                            <span>{{ $myRequest->programmes->programme_code }}</span>
                        </td>
                    </tr>

                    <tr>
                        <td>Telephone Number</td>
                        <td><span>{{ $myRequest->coordinators->Phone_No }}</span></td>
                    </tr>
                </tbody>

            </table>

            <table class="table table-bordered mb-4">

                <tbody>
                    <tr>
                        <td>Semester</td>
                        <td><span>{{ $myRequest->semesters->semester_session }}</span></td>
                    </tr>
                    <tr>
                        <td>Group</td>
                        <td><span>{{ $myRequest->groups->group_code }}</span></td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered mb-4">
                <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <th>Credit Hour</th>
                        <th>Lecture Hour</th>
                        <th>Tutorial Hour</th>
                        <th>Lab Hour</th>
                        <th>Student Number</th>
                        <th>Lecturer Name</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($myRequestBridge as $bridge )
                    <tr style="font-size: 12px">
                        <td><span> {{ $bridge->courses->course_code }} </span></td>
                        <td><span> {{ $bridge->courses->course_name }} </span></td>
                        <td><span> {{ $bridge->courses->credit_hour }}</span></td>
                        <td><span> {{ $bridge->lecture_hour }}</span></td>
                        <td><span> {{ $bridge->tutorial_hour }}</span></td>
                        <td><span> {{ $bridge->lab_hour }}</span></td>
                        <td><span> {{ $bridge->student_number }}</span></td>
                        <td><span> {{ $bridge->lecturer_name }}</span></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            <a href="{{ url()->previous() }}" class="btn btn-primary my-3">Back</a>
            <a href="{{ route('myrequests.generate_pdf', $myRequest) }}" class="btn btn-primary my-2">Generate PDF</a>


</div>
@endsection
