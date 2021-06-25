@extends('layouts.app')

@section('content')
<div class="container mt-4" >
    @include('partials.message')
    <h5 class='text-center'>FAKULTI SAINS KOMPUTER DAN MATEMATIK </h5>
                <h6 class='text-center'>BORANG PERMOHONAN KURSUS</h6>
        <br><br>

        <form method="POST" action="{{ route('myrequests.update', $myRequest) }}">
            @csrf
            @method('POST')

            <table class="table table-bordered mb-4" style="border-color:rgb(61, 56, 66)">

                <tbody>
                    <tr>
                        <td>Coordinator Name</td>
                        <td><span>{{ $myRequest->coordinators->name }}</span></td>
                    </tr>

                    <tr>
                        <td>Program</td>
                            <td>
                                <select id="programme_code" name="programme_id">
                                    <option value="" selected disabled>{{ $myRequest->programmes->programme_code }}</option>
                                @foreach ($programmes as $programme )
                                    <option value= {{$programme->id}} > {{$programme->programme_code}} </option>
                                @endforeach
                                </select>
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
                        <td>
                            <select id="semester_session" name="semester_id">
                                <option value="" selected disabled>{{ $myRequest->semesters->semester_session }}</option>
                            @foreach ($semesters as $semester )
                                <option value= {{$semester->id}} > {{$semester->semester_session}} </option>
                            @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Group</td>
                        <td>
                            <select id="group_code" name="group_id">
                                <option value="" selected disabled>{{ $myRequest->groups->group_code }}</option>
                            @foreach ($groups as $group )
                                <option value= {{$group->id}} > {{$group->group_code}} </option>
                            @endforeach
                            </select>
                        </td>
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
                        <td>
                            <select onchange="select(this)" id="course_1" name="course_id[]">
                            <option value="" selected disabled>{{ $bridge->courses->course_code }}</option>
                                @foreach ($courses as $course )
                            <option value= {{$course->id}} > {{$course->course_code}} </option>
                                @endforeach
                            </select>
                        </td>
                        <td><input id="course_1_name" type="text" disabled name="course_name[]" value="{{ $bridge->courses->course_name }}" /></td>
                        <td><input id="course_1_creditH" type="number" disabled name="credit_hour[]" value="{{ $bridge->courses->credit_hour }}"/></td>
                        <td><input id="lecture_hour" type="text" name="lecture_hour[]" value=" {{ $bridge->lecture_hour }}"/></td>
                        <td><input id="tutorial_hour" type="text" name="tutorial_hour[]" value="{{ $bridge->tutorial_hour }}"/></td>
                        <td><input id="lab_hour" type="text" name="lab_hour[]" value="{{ $bridge->lab_hour }}"/></td>
                        <td><input id="student_number" type="text" name="student_number[]" value="{{ $bridge->student_number }}"/></td>
                        <td><input id="lecturer_name" type="text" name="lecturer_name[]" value="{{ $bridge->lecturer_name }}" /></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            <button type="submit" class="btn btn-success my-3">Update</button>

            <a href="{{ route('myrequests.index') }}" class="btn btn-primary my-3">Back Requested Courses</a>
        </form>

</div>
@endsection
