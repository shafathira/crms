@extends('layouts.app')

@section('content')

<div class="container mt-4">
    @include('partials.message')
    <h1>Show User</h1>
    <a href="{{ route('users.index') }}" class="btn btn-secondary my-3">User List</a>

    <div class="form-group">
        <label for="name">User Name:</label>
        <input disabled type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input disabled type="text" class="form-control" name="email" id="email" value="{{ $user->email }}">
    </div>

    <div class="form-group">
        <label for="Phone_No">Phone Number:</label>
        <input disabled type="text" class="form-control" name="Phone_No" id="Phone_No" value="{{ $user->Phone_No }}">
    </div>

    <div class="form-group">
        <label for="role_name">Role:</label>
        <input disabled type="text" class="form-control" name="role_name" id="role_name" value="{{ $user->roles->role_name }}">
    </div>

</div>

@endsection
