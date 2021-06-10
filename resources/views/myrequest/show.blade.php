@extends('layouts.app')

@section('content')
<div class="container mt-4">
    @include('partials.message')
    <h1>Requested Course</h1>


    <div class="form-group">
        <label for="course_code">Course Code:</label>
        <input disabled type="text" class="form-control" name="course_code" id="course_code" value="{{ $myRequest->courses->course_code }}">
    </div>

    <div class="form-group">
        <label for="course_name">Course Name:</label>
        <input disabled type="text" class="form-control" name="course_name" id="course_name" value="{{ $myRequest->courses->course_name }}">
    </div>

    <div class="form-group">
        <label for="credit_hour">Credit Hour:</label>
        <input disabled type="text" class="form-control" name="credit_hour" id="credit_hour" value="{{ $myRequest->courses->credit_hour }}">
    </div>

    <div class="form-group">
        <label for="lecture_hour">Lecture Hour:</label>
        <input disabled type="text" class="form-control" name="lecture_hour" id="lecture_hour" value="{{ $myRequest->lecture_hour }}">
    </div>

    <div class="form-group">
        <label for="tutorial_hour">Tutorial Hour:</label>
        <input disabled type="text" class="form-control" name="tutorial_hour" id="tutorial_hour" value="{{ $myRequest->tutorial_hour }}">
    </div>

    <div class="form-group">
        <label for="lab_hour">Lab Hour:</label>
        <input disabled type="text" class="form-control" name="lab_hour" id="lab_hour" value="{{ $myRequest->lab_hour }}">
    </div>

    <div class="form-group">
        <label for="student_number">Student Number:</label>
        <input disabled type="text" class="form-control" name="student_number" id="student_number" value="{{ $myRequest->student_number}}">
    </div>

    <div class="form-group">
        <label for="lecturer_name">Course Name:</label>
        <input disabled type="text" class="form-control" name="lecturer_name" id="lecturer_name" value="{{ $myRequest->lecturer_name}}">
    </div>


    <a href="{{ route('myrequests.index') }}" class="btn btn-secondary my-3">Requested Courses</a>
</div>

@endsection
