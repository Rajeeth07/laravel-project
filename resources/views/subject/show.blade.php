<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$subject->subject_name}} subject details</h1>
    <table border="1">
        <tr>
            <th>Subject Name</th><td>{{$subject->subject_name}}</td>
        </tr>
        <tr>
            <th>Subject Order</th><td>{{$subject->subject_order}}</td>
        </tr>
        <tr>
            <th>Subject Color</th><td>{{$subject->subject_color}}</td>
        </tr>
    </table>
    <hr>
    <h1>{{$subject->subject_name}} students details</h1>
    <table border="1">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Grade Name</th>
        </tr>
        @foreach ($subject->students as $student)
            <tr>
                <td><a href="{{url("/students/$student->id")}}">{{$student->firstname}}</a></td>
                <td>{{$student->lastname}}</td>
                <td><a href="{{url("/grades/$student->grade_id")}}">{{$student->grade->grade_name}}</a></td>
            </tr>
        @endforeach
    </table>
    <hr>
    <h1>{{$subject->subject_name}} grades details</h1>
    <table border="1">
        <tr>
            <th>Grade Name</th>
            <th>Grade Order</th>
            <th>Grade Color</th>
        </tr>
        @foreach ($subject->grades as $grade)
            <tr>
                <td><a href="{{url("/students/$grade->id")}}">{{$grade->grade_name}}</a></td>
                <td>{{$grade->grade_order}}</td>
                <td>{{$grade->grade_color}}</td>
            </tr>
        @endforeach
    </table>
    <a href="{{url("students/")}}" style="color: blue">All student Datail</a>
    <a href="{{url("/grades")}}" style="color: red">All grades detail</a>
    <a href="{{url("/subjects")}}" style="color: black">All subjects detail</a>
</body>
</html>