@extends('layouts.app')
@section('content')
<div class="container mt-4">
    @include('partials.message')
    <h1>Edit Group</h1>
    <a href="{{ route('groups.index') }}" class="btn btn-secondary my-3">Group List</a>

    <form method="POST" action="{{ route('groups.update', $group) }}">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="group_code">Group Name:</label>
            <input type="text" class="form-control" name="group_code" id="group_code" value="{{ $group->group_code }}">
        </div>

        <button type="submit" class="btn btn-success my-3">Update Group</button>
    </form>
</div>

@endsection
