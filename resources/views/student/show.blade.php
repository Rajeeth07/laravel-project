<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$student->firstname}} Details</h1>
    <table border="1">
        <tr>
            <th>Firstname</th><td>{{$student->firstname}}</td>
        </tr>
        <tr>  
            <th>Last name</th><td>{{$student->lastname}}
        </tr>
        <tr>
            <th>Grade Name</th><td><a href="{{url("/grades/$student->grade_id")}}">{{$student->grade->grade_name}}</a></td>
        </tr>       
    </table>
    <table border="1">
        <tr>
            <th>Subject Name</th>
            <th>Subject Order</th>
            <th>Subject Color</th>
        </tr>
        <hr>
        <h1>{{$student->firstname}} Subjects details</h1>
        @foreach ($student->subjects as $subject)
            <tr>
                <td><a href="{{url("/subjects/$subject->id")}}">{{$subject->subject_name}}</a></td>
                <td>{{$subject->subject_order}}</td>
                <td>{{$subject->subject_color}}</td>
            </tr>
        @endforeach
    </table>
    <a href="{{url("students/")}}" style="color: blue">All student Detail</a>
    <a href="{{url("/grades")}}" style="color: red">All grades detail</a>
    <a href="{{url("/subjects")}}" style="color: red">All subjects detail</a>
</body>
</html>