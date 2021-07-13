@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Timetable Committee Dashboard') }}</div>
            <div class="card-body">
                <div class="form-row form-group">
                    <div class="col">
                        <a href="{{ route('myrequests.index') }}" type="button"
                        class="btn btn-primary btn-block">View Requested Courses</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection

