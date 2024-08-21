<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All Student details</h1>
    <table border="1">
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Grade Name</th>
        <th>Grade Group</th>
        <th>Grade Order</th>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{$student->id}}</td>
        <td><a href="{{url("/stu/$student->id")}}">{{$student->firstname}}</a></td>
        <td>{{$student->lastname}}</td>
        <td><a href="{{url("/grades/$student->grade_id")}}">{{$student->grade->grade_name}}</a></td>
        <td>{{$student->grade->grade_group}}</td>
        <td>{{$student->grade->grade_order}}</td>
        <td>
            @foreach ($student->subjects as $subject)
                {{$subject->subject_name}},
            @endforeach
        </td>
    </tr>
    @endforeach
    </table>
    
    <a href="{{url("/grades")}}" style="color: blue">All grades detail</a>
    <a href="{{url("/subjects")}}" style="color: red">All subjects detail</a>
</body>
</html>