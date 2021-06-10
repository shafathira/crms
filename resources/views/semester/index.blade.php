@extends('layouts.app')

@section('content')

<div class="container md-4">
    @include('partials.message')

    <h1>Semester List</h1>

    <a href="{{ route('semesters.create') }}" class="btn btn-primary my-3">Add Semester</a>

    <table class="table table-striped text-center">
        <thead>
          <tr>
            <th>Semester</th>
            <th colspan="3">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($semesters as $semester)
            <tr>
                <td>{{ $semester->semester_session }}</td>

                <td>
                    <a href="{{route('semesters.show', $semester)}}" class="btn btn-info">Show</a>
                </td>
                <td>
                    <a href="{{route('semesters.edit', $semester)}}" class="btn btn-success">Edit</a>
                </td>

                <td>
                    <form method="post" action="{{ route('semesters.destroy', $semester) }}" >
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
</div>


@endsection
