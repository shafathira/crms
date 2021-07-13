@extends('layouts.app')
@section('content')
<div class="mx-auto pull-right">
    <div class="">
        <form action="{{ route('programmes.index') }}" method="GET" role="search">
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
                <a href="{{ route('programmes.index') }}" class=" mt-1">
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
    <h1>Programme List</h1>

    <a href="{{ route('programmes.create') }}" class="btn btn-primary my-3">Add Programme</a>
    <div class="row justify-content-center">

    <table class="table table-striped text-center">
        <thead>
          <tr>
            <th>Programme Code</th>
            <th>Programme Name</th>
            <th>Coordinator Name</th>
            <th>Action</th>

          </tr>
        </thead>
        <tbody>

            @foreach ($programmes as $programme)
            <tr>
                <td>{{ $programme->programme_code }}</td>
                <td>{{ $programme->programme_name }}</td>
                <td>{{ $programme->coordinators->name }}</td>

                <td>
                    <a href="{{route('programmes.show', $programme)}}" class="btn btn-info btn-block">Show</a>
                </td>
                <td>
                    <a href="{{route('programmes.edit', $programme)}}" class="btn btn-success btn-block">Edit</a>
                </td>

                <td>
                    <form method="post" action="{{ route('programmes.destroy', $programme) }}" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-block">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
</div>
</div>


@endsection
