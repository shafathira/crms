@extends('layouts.app')

@section('content')
<div class="container mt-4" >
    @include('partials.message')
    <center><h5>FAKULTI SAINS KOMPUTER DAN MATEMATIK </h5>
                <h6>BORANG PERMOHONAN KURSUS</h6></center>
        <br><br>

        <form method="POST" action="{{ route('myrequests.store') }}">
            @csrf
            <table class="table table-bordered mb-4" style="border-color:rgb(61, 56, 66)">

                <tbody>
                    <tr>
                        <td>Coordinator Name</td>
                        <td><span>{{ $users->name }}</span></td>
                    </tr>

                    <tr>
                        <td>Program</td>
                        <td>
                            <select id="programme_code" name="programme_id">
                                <option value="" selected disabled>Choose Program </option>
                            @foreach ($programmes as $programme )
                                <option value= {{$programme->id}} > {{$programme->programme_code}} </option>
                            @endforeach
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Telephone Number</td>
                        <td><span>{{ $users->Phone_No }}</span></td>
                    </tr>
                </tbody>

            </table>

            <table class="table table-bordered mb-4">

                <tbody>
                    <tr>
                        <td>Semester</td>
                        <td>
                            <select id="semester_session" name="semester_id">
                                <option value="" selected disabled>Choose semester session</option>
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
                                <option value="" selected disabled>Choose group</option>
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

                <tbody class="input_fields_wrap">

                    <tr style="font-size: 12px">
                        <td>
                            <select onchange="select(this)" id="course_1" name="course_id[]">
                            <option value="" selected disabled>Choose course</option>
                                @foreach ($courses as $course )
                            <option value= {{$course->id}} > {{$course->course_code}} </option>
                                @endforeach
                            </select>
                        </td>


                        <td><input id="course_1_name" type="text" disabled name="course_name[]" /></td>
                        <td><input id="course_1_creditH" type="number" disabled name="credit_hour[]" /></td>
                        <td><input id="lecture_hour" type="number" name="lecture_hour[]" /></td>
                        <td><input id="tutorial_hour" type="number" name="tutorial_hour[]" /></td>
                        <td><input id="lab_hour" type="number" name="lab_hour[]" /></td>
                        <td><input id="student_number" type="number" name="student_number[]" /></td>
                        <td><input id="lecturer_name" type="text" name="lecturer_name[]" /></td>

                    </tr>

                </tbody>

            </table>



                <div class='form-group'>
                    <button type="button" class="btn btn-sm add_field_button">Add column</button>
                </div>
                <button type="submit" class="btn btn-primary my-3 btn-fill">Submit</button>


            </form>
            <script>
                var courses = {!! json_encode($courses, JSON_HEX_TAG) !!};
            </script>

</div>
@endsection
