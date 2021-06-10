@extends('layouts.app')

@section('content')

<div class="container mt-4">
    @include('partials.message')
    <h1>Edit Semester</h1>
    <a href="{{ route('semesters.index') }}" class="btn btn-secondary my-3">Semester List</a>

    <form method="POST" action="{{ route('semesters.update', $semester) }}">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="semester_session">Semester session:</label>
            <input type="text" class="form-control" name="semester_session" id="semester_session" value="{{ $semester->semester_session }}">
        </div>

        <button type="submit" class="btn btn-success my-3">Update Semester</button>
    </form>
</div>

@endsection
