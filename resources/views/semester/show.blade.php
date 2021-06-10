@extends('layouts.app')

@section('content')


<div class="container mt-4">
    @include('partials.message')
    <h1>Show Semester</h1>
    <a href="{{ route('semesters.index') }}" class="btn btn-secondary my-3">Semester List</a>

    <div class="form-group">
        <label for="semester_session">Semester Session:</label>
        <input type="text" disabled class="form-control" name="semester_session" id="semester_session" value="{{ $semester->semester_session }}">
    </div>

</div>

@endsection
