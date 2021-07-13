@extends('layouts.app')
@section('content')
<div class="mx-auto pull-right">
    <div class="">
        <form action="{{ route('groups.index') }}" method="GET" role="search">
            @csrf
            <div class="input-group">
                <span class="input-group-btn mr-5 mt-1">
                    <button class="btn btn-info btn-fill " type="submit" title="Search projects">
                        <span class="nc-icon nc-zoom-split"></span>
                    </button>
                </span>
                <span class="input-group-btn mr-5 mt-1">
                <input type="text" class="form-control" name="term" placeholder="Search group" id="term">
                </span>
                <a href="{{ route('groups.index') }}" class=" mt-1">
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
    <h1>Group List</h1>

    <a href="{{ route('groups.create') }}" class="btn btn-primary my-3">Add Group</a>

    <table class="table table-striped text-center">
        <thead>
          <tr>
            <th>Group Code</th>
            <th>Programme Code</th>
            <th>Programme Name</th>
            <th colspan="3">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($groups as $group)
            <tr>
                <td>{{ $group->group_code }}</td>
                <td>{{ $group->programmes->programme_code }}</td>
                <td>{{ $group->programmes->programme_name }}</td>

                <td>
                    <a href="{{route('groups.show', $group)}}" class="btn btn-info">Show</a>
                </td>
                <td>
                    <a href="{{route('groups.edit', $group)}}" class="btn btn-success">Edit</a>
                </td>

                <td>
                    <form method="post" action="{{ route('groups.destroy', $group) }}" >
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
