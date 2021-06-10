@extends('layouts.app')
@section('content')
<div class="container mt-4">
    @include('partials.message')
    <h1>Edit </h1>
    <a href="{{ route('myrequests.index') }}" class="btn btn-secondary my-3">Requested Courses</a>

    <form method="POST" action="{{ route('myrequests.update', $myrequest) }}">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="group_code">Group Code:</label>
            <input type="text" class="form-control" name="group_code" id="group_code" value="{{ $myrequest->groups->group_code }}">
        </div>
        <div class="form-group">
            <label for="course_code">Course Code:</label>
            <input type="text" class="form-control" name="course_code" id="course_code" value="{{ $myrequest->courses->course_code }}">
        </div>
        <div class="form-group">
            <label for="course_name">Course Name:</label>
            <input type="text" class="form-control" name="course_name" id="course_name" value="{{ $myrequest->courses->course_name }}">
        </div>
        <div class="form-group">
            <label for="credit_hour">Credit Hour:</label>
            <input type="text" class="form-control" name="credit_hour" id="credit_hour" value="{{ $myrequest->courses->credit_hour }}">
        </div>
        <div class="form-group">
            <label for="lecture_hour">Lecture Hour:</label>
            <input type="text" class="form-control" name="lecture_hour" id="lecture_hour" value="{{ $myrequest->lecture_hour }}">
        </div>
        <div class="form-group">
            <label for="tutorial_hour">Tutorial Hour:</label>
            <input type="text" class="form-control" name="tutorial_hour" id="tutorial_hour" value="{{ $myrequest->tutorial_hour }}">
        </div>
        <div class="form-group">
            <label for="lab_hour">Lab Hour:</label>
            <input type="text" class="form-control" name="lab_hour" id="lab_hour" value="{{ $myrequest->lab_hour }}">
        </div>
        <div class="form-group">
            <label for="student_number">Student Number:</label>
            <input type="text" class="form-control" name="student_number" id="student_number" value="{{ $myrequest->student_number }}">
        </div>
        <div class="form-group">
            <label for="lecturer_name">Lecturer Name:</label>
            <input type="text" class="form-control" name="lecturer_name" id="lecturer_name" value="{{ $myrequest->lecturer_name }}">
        </div>

        <button type="submit" class="btn btn-success my-3">Update Requested Courses</button>
    </form>
</div>

@endsection
