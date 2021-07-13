@extends('layouts.app')

@section('content')
<div class="container mt-4" >
    @include('partials.message')
    <h5 class='text-center'>FAKULTI SAINS KOMPUTER DAN MATEMATIK </h5>
                <h6 class='text-center'>BORANG PERMOHONAN KURSUS</h6>
        <br><br>

        <form method="POST" action="{{ route('myrequests.update', $myRequest) }}">
            @csrf
            @method('PUT')

            <table class="table table-bordered mb-4" style="border-color:rgb(0, 0, 0)">

                <tbody>
                    <tr>
                        <td>Coordinator Name</td>
                        <td><span>{{ $myRequest->coordinators->name }}</span></td>
                    </tr>

                    <tr>
                        <td>Program</td>
                            <td>
                                <select id="programme_code" name="programme_id">
                                @foreach ($programmes as $programme )
                                    <option value= {{$programme->id}}
                                        @if($myRequest->programme_id == $programme->id)  selected @endif
                                        > {{$programme->programme_code}} </option>
                                @endforeach
                                </select>
                            </td>
                    </tr>

                    <tr>
                        <td>Telephone Number</td>
                        <td><span>{{ $myRequest->coordinators->Phone_No }}</span></td>
                    </tr>
                </tbody>

            </table>

            <table class="table table-bordered mb-4">

                <tbody>
                    <tr>
                        <td>Semester</td>
                        <td>
                            <select id="semester_session" name="semester_id">
                            @foreach ($semesters as $semester )
                                <option value= {{$semester->id}}
                                    @if($myRequest->semester_id == $semester->id)  selected @endif
                                    > {{$semester->semester_session}} </option>
                            @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Group</td>
                        <td>
                            <select id="group_code" name="group_id">
                            @foreach ($groups as $group )
                                <option value= {{$group->id}}
                                    @if($myRequest->group_id == $group->id)  selected @endif
                                    > {{$group->group_code}} </option>
                            @endforeach
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered mb-4">
                <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <th>Credit Hour</th>
                        <th>Lecture Hour</th>
                        <th>Tutorial Hour</th>
                        <th>Lab Hour</th>
                        <th>Student Number</th>
                        <th>Lecturer Name</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($myRequestBridge as $bridge )
                    <tr style="font-size: 12px">
                        <input type="hidden"  name="bridge_id[]" value="{{ $bridge->id }}" />
                        <td>
                            <select onchange="select_edit(this)" id="course_{{ $bridge->id }}" name="course_id[]">
                                @foreach ($courses as $course )
                            <option value= {{$course->id}}
                                @if($bridge->course_id == $course->id)  selected @endif
                                > {{$course->course_code}} </option>
                                @endforeach
                            </select>
                        </td>
                        <td><input id="course_{{ $bridge->id }}_name" type="text" disabled name="course_name[]" value="{{ $bridge->courses->course_name }}" /></td>
                        <td><input id="course_{{ $bridge->id }}_creditH" type="number" disabled name="credit_hour[]" value="{{ $bridge->courses->credit_hour }}"/></td>
                        <td><input id="lecture_hour" type="text" name="lecture_hour[]" value=" {{ $bridge->lecture_hour }}"/></td>
                        <td><input id="tutorial_hour" type="text" name="tutorial_hour[]" value="{{ $bridge->tutorial_hour }}"/></td>
                        <td><input id="lab_hour" type="text" name="lab_hour[]" value="{{ $bridge->lab_hour }}"/></td>
                        <td><input id="student_number" type="text" name="student_number[]" value="{{ $bridge->student_number }}"/></td>
                        <td><input id="lecturer_name" type="text" name="lecturer_name[]" value="{{ $bridge->lecturer_name }}" /></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            <button type="submit" class="btn btn-success my-3">Update</button>

        </form>
        <script>
            var courses = {!! json_encode($courses, JSON_HEX_TAG) !!};
        </script>

</div>
@endsection
