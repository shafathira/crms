@extends('layouts.app')

@section('content')
<div class="container mt-4">
    @include('partials.message')
    <h1>My Request</h1>



    <table class="table table-striped">
        <thead>
          <tr class="text-center">
            <th>Programme Code</th>
            <th>Group Code</th>

            <th colspan="3">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($myRequests as $myRequest)
            <tr class="text-center">
                <td>{{ $myRequest->programmes->programme_code }}</td>
                <td>{{ $myRequest->groups->group_code }}</td>

                <td>

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
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
</div>


@endsection


