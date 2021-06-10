@extends('layouts.app')
@section('content')


<div class="container mt-4">
    @include('partials.message')
    <h1>Edit Programme</h1>
    <a href="{{ route('programmes.index') }}" class="btn btn-secondary my-3">Programme List</a>

    <form method="POST" action="{{ route('programmes.update', $programme) }}">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="programme_code">Programme Code:</label>
            <input type="text" class="form-control" name="programme_code" id="programme_code" value="{{ $programme->programme_code }}">
        </div>

        <div class="form-group">
            <label for="programme_name">Programme Name:</label>
            <input type="text" class="form-control" name="programme_name" id="programme_name" value="{{ $programme->programme_name }}">
        </div>

        <div class="form-group">
            <label for="Coor_id">Coordinator Name:</label>
            <select type="text" class="form-control" name="Coor_id" id="Coor_id" >


             @foreach ($coordinators as $coordinator)
             <option value="{{ $coordinator->id }}"
                @if($coordinator->id == $programme->coordinators->id) selected
                @endif>{{ $coordinator->name }}</option>
             @endforeach
            </select>

        </div>

        <button type="submit" class="btn btn-success my-3">Update Programme</button>
    </form>
</div>

@endsection
