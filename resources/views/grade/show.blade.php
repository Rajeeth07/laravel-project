<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$grade->grade_name}} grade details</h1>
    <table border="1">
        <tr>
            <th>Grade Id</th>
            <td>{{$grade->id}}</td>
        </tr>
        <tr>
            <th>Grade Name</th>
            <td>{{$grade->grade_name}}</td>
        </tr>
        <tr>
            <th>Grade Color</th>
            <td>{{$grade->grade_color}}</td>
        </tr>
        <tr>
            <th>Grade Order</th>
            <td>{{$grade->grade_order}}</td>
        </tr>
    </table>
    <h1>{{$grade->grade_name}} students details</h1>
    <table border="1">
        <tr>
            <th>
                First Name
            </th>
            <th>
                Last Name
            </th>
            <th>Grade Name</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>
                    <a href="{{url("/students/$student->id")}}">{{$student->firstname}}</a>
                </td>
                <td>{{$student->lastname}}</td>
                <td>{{$student->grade->grade_name}}</td>
            </tr>
        @endforeach
    </table>
    <table border="1">
        <tr>
            <th>Subject Name</th>
            <th>Subject Order</th>
            <th>Subject Color</th>
        </tr>
        <hr>
        <h1>{{$grade->grade_name}} Subject details</h1>
        @foreach ($grade->subjects as $subject)
            <tr>
                <td><a href="{{url("/subjects/$subject->id")}}">{{$subject->subject_name}}</a></td>
                <td>{{$subject->subject_order}}</td>
                <td>{{$subject->subject_color}}</td>
            </tr>
        @endforeach
    </table>
    <a href="{{url("/students")}}" style="color: blue">All student Datail</a>
    <a href="{{url("/grades")}}" style="color: red">All grades detail</a>
    <a href="{{url("/subjects")}}" style="color: black">All subjects detail</a>
</body>
</html>

