@extends('layouts.app')
@section('content')
<div class="mx-auto pull-right">
    <div class="">
        <form action="{{ route('courses.index') }}" method="GET" role="search">
            @csrf
            <div class="input-group">
                <span class="input-group-btn mr-5 mt-1">
                    <button class="btn btn-info btn-fill " type="submit" title="Search projects">
                        <span class="nc-icon nc-zoom-split"></span>
                    </button>
                </span>
                <span class="input-group-btn mr-5 mt-1">
                <input type="text" class="form-control" name="term" placeholder="Search course" id="term">
                </span>
                <a href="{{ route('courses.index') }}" class=" mt-1">
                    <span class="input-group-btn ">
                        <button class="btn btn-danger btn-fill " type="button" title="Refresh page">
                            <span class="nc-icon nc-refresh-02"></span>
                        </button>
                    </span>
                </a>
            </div>
        </form>
    </div>
</div>
<div class="container mt-4">
    @include('partials.message')
    <h1>Course List</h1>

    <a href="{{ route('courses.create') }}" class="btn btn-primary my-3">Add Course</a>

    <table class="table table-striped text-center">
        <thead>
          <tr>
            <th>Course Code</th>
            <th>Course Name</th>
            <th>Credit Hour</th>
            <th colspan="3">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($courses as $course)
            <tr>
                <td>{{ $course->course_code }}</td>
                <td>{{ $course->course_name }}</td>
                <td>{{ number_format($course->credit_hour, 1) }}</td>

                <td>
                    <a href="{{route('courses.show', $course)}}" class="btn btn-info">Show</a>
                </td>
                <td>
                    <a href="{{route('courses.edit', $course)}}" class="btn btn-success">Edit</a>
                </td>

                <td>
                    <form method="post" action="{{ route('courses.destroy', $course) }}" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
</div>


@endsection
