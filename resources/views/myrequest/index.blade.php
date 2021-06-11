@extends('layouts.app')

@section('content')
<div class="container mt-4">
    @include('partials.message')
    <h1>Requested Courses</h1>



    <table class="table table-striped">
        <thead>
          <tr class="text-center">
            <th>Programme Code</th>
            <th>Group Code</th>

            <th colspan="3">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($myRequests as $form)
            <tr class="text-center">
                <td>{{ $form->programmes->programme_code }}</td>
                <td>{{ $form->groups->group_code }}</td>

                <td>

                    <a href="{{route('myrequests.show', $form)}}" class="btn btn-info btn-fill ">Show</a>
                </td>
                <td>
                    <a href="{{route('myrequests.edit', $form)}}" class="btn btn-success ">Edit</a>
                </td>

                <td>
                    <form method="post" action="{{ route('myrequests.destroy',  $form) }}" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
    <a href="{{ route('myrequests.create') }}" class="btn btn-primary my-3">Back to Request Form</a>
</div>


@endsection


