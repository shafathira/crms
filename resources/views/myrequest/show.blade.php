@extends('layouts.app')

@section('content')
<div class="container mt-4" >
    @include('partials.message')
    <h5 class='text-center'>FAKULTI SAINS KOMPUTER DAN MATEMATIK </h5>
                <h6 class='text-center'>BORANG PERMOHONAN KURSUS</h6>
        <br><br>

        <form method="POST" action="{{ route('myrequests.show') }}">
            @csrf
            <table class="table table-bordered mb-4" style="border-color:rgb(61, 56, 66)">

                <tbody>
                    <tr>
                        <td>Coordinator Name</td>
                        <td><span>{{ $form->coordinators->name }}</span></td>
                    </tr>

                    <tr>
                        <td>Program</td>
                        <td>
                            <span>{{ $form->programmes->programme_code }}</span>
                        </td>
                    </tr>

                    <tr>
                        <td>Telephone Number</td>
                        <td><span>{{ $form->coordinators->Phone_No }}</span></td>
                    </tr>
                </tbody>

            </table>

            <table class="table table-bordered mb-4">

                <tbody>
                    <tr>
                        <td>Semester</td>
                        <td><span>{{ $form->semesters->semester_session }}</span></td>
                    </tr>
                    <tr>
                        <td>Group</td>
                        <td><span>{{ $form->groups->group_code }}</span></td>
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

                    <tr>
                        <td><input id="course_1_name" type="text" disabled name="course_name[]" /></td>
                        <td><input id="course_1_name" type="text" disabled name="course_name[]" /></td>
                        <td><input id="course_1_creditH" type="number" disabled name="credit_hour[]" /></td>
                        <td><input id="lecture_hour" type="number" name="lecture_hour[]" /></td>
                        <td><input id="tutorial_hour" type="number" name="tutorial_hour[]" /></td>
                        <td><input id="lab_hour" type="number" name="lab_hour[]" /></td>
                        <td><input id="student_number" type="number" name="student_number[]" /></td>
                        <td><input id="lecturer_name" type="text" name="lecturer_name[]" /></td>s

                    </tr>

                </tbody>

            </table>



                <div class='form-group'>
                    <button type="button" class="btn btn-sm add_field_button">Add column</button>
                </div>



            </form>


</div>
@endsection
