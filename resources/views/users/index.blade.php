@extends('layouts.app')

@section('content')
<div class="mx-auto pull-right">
    <div class="">
        <form action="{{ route('users.index') }}" method="GET" role="search">
            @csrf
            <div class="input-group">
                <span class="input-group-btn mr-5 mt-1">
                    <button class="btn btn-info btn-fill " type="submit" title="Search projects">
                        <span class="nc-icon nc-zoom-split"></span>
                    </button>
                </span>
                <span class="input-group-btn mr-5 mt-1">
                <input type="text" class="form-control" name="term" placeholder="Search user" id="term">
                </span>
                <a href="{{ route('users.index') }}" class=" mt-1">
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
    <h1>User List</h1>

    <a href="{{ route('users.create') }}" class="btn btn-primary my-3">Add User</a>

    <table class="table table-striped">
        <thead>
          <tr class="text-center">
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Role</th>
            <th colspan="3">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)
            <tr class="text-center">
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->Phone_No }}</td>
                <td>{{ $user->roles->role_name }}</td>

                <td>

                    <a href="{{route('users.show', $user)}}" class="btn btn-info ">Show</a>
                </td>
                <td>
                    <a href="{{route('users.edit', $user)}}" class="btn btn-success ">Edit</a>
                </td>

                <td>
                    <form method="post" action="{{ route('users.destroy', $user) }}" >
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
