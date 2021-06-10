@extends('layouts.app')

@section('content')

<div class="container mt-4">
    @include('partials.message')
    <h1>Edit User</h1>
    <a href="{{ route('users.index') }}" class="btn btn-secondary my-3">User List</a>

    <form method="POST" action="{{ route('users.update', $user) }}">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="user_name">User Name:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}">
        </div>

        <div class="form-group">
            <label for="Phone_No">Phone Number:</label>
            <input type="text" class="form-control" name="Phone_No" id="Phone_No" value="{{ $user->Phone_No }}">
        </div>

        <div class="form-group">
            <label for="role_id">Role:</label>

            <select id="role_id" name="role_id" class="form-control">
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}" @if($role->id == $user->roles->id) selected @endif >{{ $role->role_name }}</option>
                @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-success my-3">Update User</button>
    </form>
</div>

@endsection
