@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Coordinator Dashboard') }}</div>
                    <div class="card-body">
                    <div class="form-row form-group">
                        <div class="col">
                            <a href="{{ route('myrequests.create') }}" type="button"
                            class="btn btn-warning btn-block">Course Request Form</a>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col">
                            <a href="{{ route('coor_req') }}" type="button"
                            class="btn btn-primary btn-block">My Requests</a>
                        </div>
                        <div class="col">
                            <a href="{{ route('notcoor_req') }}" type="button"
                            class="btn btn-success btn-block">All Requested Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

