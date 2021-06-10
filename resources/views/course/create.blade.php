@extends('layouts.app')

@section('content')
<div class="container mt-4">
    @include('partials.message')
    <h1>Create Course</h1>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary my-3">Course List</a>

    <form method="POST" action="{{ route('courses.store') }}">
        @csrf

        <div class="form-group">
            <label for="course_code">Course Code:</label>
            <input type="text" class="form-control" name="course_code" id="course_code">
        </div>

        <div class="form-group">
            <label for="course_name">Course Name:</label>
            <input type="text" class="form-control" name="course_name" id="course_name">
        </div>

        <div class="form-group">
            <label for="credit_hour">Credit Hour:</label>
            <input type="number" class="form-control" name="credit_hour" id="credit_hour">
        </div>

        <button type="submit" class="btn btn-primary my-3">Add Course</button>
    </form>
</div>



@endsection
