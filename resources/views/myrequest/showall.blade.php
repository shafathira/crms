@extends('layouts.app')

@section('content')
<div class="container mt-4">
    @include('partials.message')
    <h2>Requested Courses</h2>



    <table class="table table-striped">
        <thead>
          <tr class="text-center">
            <th>Programme Code</th>
            <th>Group Code</th>
            {{-- <th>Course Code</th>
            <th>Course Name</th>
            <th>Credit Hour</th>
            <th>Lecture Hour</th>
            <th>Tutorial Hour</th>
            <th>Lab Hour</th>
            <th>Student Number</th>
            <th>Lecturer Name</th> --}}
          </tr>
        </thead>
        <tbody>

            @foreach ($myRequests as $myRequest)
            <tr class="text-center">
                <td>{{ $myRequest->programmes->programme_code }}</td>
                <td>{{ $myRequest->groups->group_code }}</td>
                {{-- <td>{{ $myRequest->courses->course_code }}</td>
                <td>{{ $myRequest->courses->course_name }}</td>
                <td>{{ $myRequest->courses->credit_hour }}</td>
                <td>{{ $myRequest->lecture_hour }}</td>
                <td>{{ $myRequest->tutorial_hour }}</td>
                <td>{{ $myRequest->lab_hour }}</td>
                <td>{{ $myRequest->student_number }}</td>
                <td>{{ $myRequest->lecturer_name }}</td> --}}


                {{-- <td>

                    <a href="{{route('myrequests.show', $myRequest)}}" class="btn btn-info btn-fill ">Show</a>
                </td>
                <td>
                    <a href="{{route('myrequests.edit', $myRequest)}}" class="btn btn-success ">Edit</a>
                </td>

                <td>
                    <form method="post" action="{{ route('myrequests.destroy',  $myRequest) }}" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ">Delete</button>
                    </form>
                </td> --}}
            </tr>
            @endforeach

            <a href="{{route('myrequests.create')}}">Print Form in PDF</a>

        </tbody>
    </table>
</div>


@endsection


