@extends('layouts.app')
@section('content')


<div class="container mt-4">
    @include('partials.message')
    <h1>Show Programme</h1>
    <a href="{{ route('programmes.index') }}" class="btn btn-secondary my-3">Programme List</a>

    <div class="form-group">
        <label for="programme_code">Programme Code:</label>
        <input type="text" class="form-control" name="programme_code" id="programme_code" value="{{ $programme->programme_code }}" disabled>
    </div>

    <div class="form-group">
        <label for="programme_name">Programme Name:</label>
        <input type="text" class="form-control" name="programme_name" id="programme_name" value="{{ $programme->programme_name }}" disabled>
    </div>

    <div class="form-group">
        <label for="coordinator_name">Coordinator Name:</label>
        <input type="text" class="form-control" name="coordinator_name" id="coordinator_name" value="{{ $programme->coordinators->name }}" disabled>
    </div>

</div>

@endsection
