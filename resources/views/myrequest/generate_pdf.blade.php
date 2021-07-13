<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        h1,
        h2, h3, h4, h5, h6
        {
            color: rgb(105, 101, 101);
        }
        table,
        td,
        th {
            border: 1px solid black;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 3px 0px 3px;
        }
    </style>
</head>

<body>

    <div class="container mt-4" >
        <center>
        <h4>FAKULTI SAINS KOMPUTER DAN MATEMATIK <br>
            BORANG PERMOHONAN KURSUS <br>
            {{ $myRequest->semesters->semester_session }} </h4>
            <br>
        </center>

                <table>
                    <tbody>
                        <tr>
                            <td>Coordinator Name</td>
                            <td><span>{{ $myRequest->coordinators->name }}</span></td>
                        </tr>

                        <tr>
                            <td>Program</td>
                            <td>
                                <span>{{ $myRequest->programmes->programme_code }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>Telephone Number</td>
                            <td><span>{{ $myRequest->coordinators->Phone_No }}</span></td>
                        </tr>
                    </tbody>

                </table>
                &nbsp;&nbsp;
                <table class="table table-bordered mb-4">

                    <tbody>
                        <tr>
                            <td>Semester</td>
                            <td><span>{{ $myRequest->semesters->semester_session }}</span></td>
                        </tr>
                        <tr>
                            <td>Group</td>
                            <td><span>{{ $myRequest->groups->group_code }}</span></td>
                        </tr>
                    </tbody>
                </table>
                &nbsp;&nbsp;
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
                            <td><span> {{ $bridge->courses->course_code }} </span></td>
                            <td><span> {{ $bridge->courses->course_name }} </span></td>
                            <td><span> {{ $bridge->courses->credit_hour }}</span></td>
                            <td><span> {{ $bridge->lecture_hour }}</span></td>
                            <td><span> {{ $bridge->tutorial_hour }}</span></td>
                            <td><span> {{ $bridge->lab_hour }}</span></td>
                            <td><span> {{ $bridge->student_number }}</span></td>
                            <td><span> {{ $bridge->lecturer_name }}</span></td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>


    </div>

</body>
</html>
