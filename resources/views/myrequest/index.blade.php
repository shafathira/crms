@extends('layouts.app')

@section('content')
<div class="mx-auto pull-right">
    <div class="">
        <form action="{{ route('myrequests.index') }}" method="POST" role="search">
            @csrf
            <div class="input-group">
                <span class="input-group-btn mr-5 mt-1">
                    <button class="btn btn-info btn-fill " type="submit" title="Search projects">
                        <span class="nc-icon nc-zoom-split"></span>
                    </button>
                </span>
                <span class="input-group-btn mr-5 mt-1">
                <input type="text" class="form-control" name="term" placeholder="Search programme" id="term">
                </span>
                <a href="{{ route('myrequests.index') }}" class=" mt-1">
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

            @foreach ($myRequests as $myRequest)
            <tr class="text-center">
                <td>{{ $myRequest->programmes->programme_code }}</td>
                <td>{{ $myRequest->groups->group_code }}</td>

                <td>

                    <a href="{{route('myrequests.show', $myRequest)}}" class="btn btn-info btn-fill ">Show</a>
                </td>

            </tr>
            @endforeach


        </tbody>
    </table>
</div>


@endsection


